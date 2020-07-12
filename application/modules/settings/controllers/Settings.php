<?php
/**
 *
 */
class Settings extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in') !== 1) {
			redirect('auth');
		}
	}

	public function index()
	{
		$header['title'] = 'Settings - WANOTIF';
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');

		$user_id = $this->session->userdata('user_id');
		$data['whatsapp'] = $this->db->where('user_id',$user_id)->get('config_whatsapp_api')->row();

		$this->load->view('settings/index',$data);

		$this->load->view('themes/bootstrap/footer');
	}

	public function whatsapp()
	{

		$this->form_validation->set_rules('phone_number','Phone Number', 'required|is_natural');
		$this->form_validation->set_rules('token','token', 'required|alpha_numeric');
		if ($this->form_validation->run()) {
			$user_id = $this->session->userdata('user_id');
			$config = $this->db->where('user_id', $user_id)->get('config_whatsapp_api');
			$data = $this->input->post(NULL,true);
			if ($config->result()) {
				$this->db->where('user_id', $user_id)->update('config_whatsapp_api',$data);
			}else{
				$data['user_id'] = $user_id;
				$this->db->insert('config_whatsapp_api',$data);
			}
		}
		redirect('settings');
	}

	public function email()
	{
		$data = $this->input->post(NULL,true);
		$this->form_validation->set_rules('mailgun.email_address','Mailgun Email', 'required|email');
		
	}
}
