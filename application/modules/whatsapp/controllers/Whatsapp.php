<?php

class Whatsapp extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in') !== 1) {
			redirect('auth');
		}
		$this->load->library('Whatsapp_manager', 'https://console.wablas.com');
	}

	public function index()
	{
		$header['title'] = 'Whatsapp - WANOTIF';
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');

		$data['whatsapps'] = $this->db->get('whatsapps')->result();
		$this->load->view('whatsapp/index', $data);
		$this->load->view('themes/bootstrap/footer');
	}

	public function create()
	{
		$header['title'] = 'Whatsapp - WANOTIF';
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');

		$data['packages'] = $this->db->get('whatsapp_packages')->result();
		$data['users'] = $this->db->where('id <>',1)->get('users')->result();
		$this->load->view('whatsapp/create', $data);
		$this->load->view('themes/bootstrap/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('user_id','User Email','required|numeric');
		$this->form_validation->set_rules('package_id','User Email','required|numeric');
		$this->form_validation->set_rules('whatsapp_number','Whatsapp Number','required');
		$this->form_validation->set_rules('whatsapp_token','Whatsapp Token','required');

		if ($this->form_validation->run()) {
			$data = $this->input->post(NULL, true);
			$this->db->insert('whatsapps', $data);

			$package_id = $this->input->post('package_id');
			$whatsapp_id = $this->db->insert_id();
			$created_date = date('Y-m-d h:i:s');

			$this->whatsapp_manager->update_subscription($package_id, $whatsapp_id, $created_date);

			redirect('whatsapp');
		}else{
			redirect('whatsapp/create');
		}
	}

	public function show($id)
	{
		// code...
	}

	public function edit($id)
	{
		// code...
	}

	public function update($id)
	{
		// code...
	}

	public function scan_qr()
	{
		$base_url = $this->whatsapp_manager->get_base_url();
		$token = $this->whatsapp_manager->get_token();
		$params = http_build_query([
			'token' => $token,
			'url' => base64_encode($base_url)
		]);

		$site_url = $base_url;
		$site_url .= '/generate/qr.php?'.$params;
		redirect($site_url, 'refresh');
	}

	public function send_message()
	{
		$phone = '6281289995858';
		$message = 'testing wanotif baru controller CI';
		$cek = $this->whatsapp_manager->send_text_message($phone, $message);
		var_dump($cek);
	}
}
