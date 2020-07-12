<?php
/**
*
*/
class Dashboard extends CI_Controller
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
		$header['title'] = 'Dashboard - WANOTIF';
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('themes/bootstrap/footer');
	}

	public function profile()
	{
		$header['title'] = 'Profile - WANOTIF';
		$data['profile'] = $this->db
		->select(['first_name','last_name','user_type','email','mobile'])
		->where('id', $this->session->userdata('user_id'))
		->get('users')
		->row();
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');
		$this->load->view('dashboard/profile', $data);
		$this->load->view('themes/bootstrap/footer');
	}
}
