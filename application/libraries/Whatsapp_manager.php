<?php
require FCPATH.'vendor/autoload.php';

use GuzzleHttp\Client;

class Whatsapp_manager{
	protected $CI;
	protected $client;
	protected $base_url;

	function __construct($base_url)
	{
		$this->CI =& get_instance();
		$this->base_url = $base_url;
		$this->setClient($this->base_url);
	}

	public function get_token()
	{
		$this->CI->load->config('my_config');
		$token = $this->CI->config->item('whatsapp_token');
		return $token;
	}

	public function get_base_url()
	{
		return $this->base_url;
	}

	private function setClient($base_url)
	{
		$this->CI->load->config('my_config');
		$token = $this->CI->config->item('whatsapp_token');
		$this->client = new Client([
			'base_uri' => $base_url,
			'timeout' => '50',
			'http_errors' => false,
			'headers' => [
				'Accept' => 'application/json',
				'Content-Type' => 'application/json',
				'Authorization' => $token
			]
		]);
	}

	public function send_text_message($phone, $message)
	{
		$response = $this->client->post('api-ecommerce/cart-checkout', [
			'form_params' => [
				'phone' => $phone,
				'message' => $message,
			]
		]);
		$data = json_decode($response->getBody());
		return $data;
	}

	public function update_subscription($package_id, $whatsapp_id, $created_date)
	{
		$whatsapp_package = $this->CI->db->where('id',$package_id)->get('whatsapp_packages')->row();
		$carbon = \Carbon\Carbon::createFromFormat('Y-m-d h:i:s', $created_date);
		$duedate = false;
		if ($whatsapp_package) {
			switch ($whatsapp_package->expired_in_unit) {
				case 'd':
				$duedate = $carbon->addDay();
				if ($whatsapp_package->expired_in > 1) {
					$duedate = $carbon->addDays($whatsapp_package->expired_i);
				}
				break;
				case 'm':
				$duedate = $carbon->addMonth();
				if ($whatsapp_package->expired_in > 1) {
					$duedate = $carbon->addDays($whatsapp_package->expired_i);
				}
				break;
				case 'y':
				$duedate = $carbon->addYear();
				if ($whatsapp_package->expired_in > 1) {
					$duedate = $carbon->addDays($whatsapp_package->expired_i);
				}
				break;
			}
		}
		if ($duedate) {
			$this->CI->db->where('id',$whatsapp_id)->update('whatsapps', [
				'duedate' => $duedate->format('Y-m-d'),
				'messages_left' => $whatsapp_package->quota
			]);
		}
	}
}
