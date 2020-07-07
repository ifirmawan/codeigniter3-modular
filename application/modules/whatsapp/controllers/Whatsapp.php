<?php
/**
 *
 */
class Whatsapp extends CI_Controller
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
		echo "Whatsapp";
	}
}
