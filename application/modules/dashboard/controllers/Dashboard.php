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
		$this->load->view('auth/dashboard/index');
		$this->load->view('themes/bootstrap/footer');
	}
}
