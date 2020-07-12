<?php
/**
 *
 */
class Index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('my');
	}

	public function index()
	{
		$header['title'] = 'Whatsapp Packages - WANOTIF';
		$this->load->view('themes/bootstrap/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');

		$data['packages'] = $this->db->get('whatsapp_packages')->result();
		$this->load->view('whatsapp-packages/index', $data);
		$this->load->view('themes/bootstrap/footer');
	}

	public function create()
	{
		$header['title'] = 'Create Package - WANOTIF';
		$this->load->view('themes/bootstrap/summernote/header', $header);
		$this->load->view('themes/bootstrap/navbar');
		$this->load->view('themes/bootstrap/sidebar');
		$this->load->view('whatsapp-packages/create');
		$this->load->view('themes/bootstrap/summernote/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('name','Package name','required');
		$this->form_validation->set_rules('price','Package price','required');;
		$this->form_validation->set_rules('quota','Package Quota','required');

		if ($this->form_validation->run()) {
			$data = $this->input->post(NULL, true);
			$this->db->insert('whatsapp_packages',$data);
			redirect('whatsapp-packages/index');
		}else{
			redirect('whatsapp-packages/index/create');
		}
	}

	public function edit($id)
	{
		// code...
	}

	public function update($id)
	{
		// code...
	}

	public function delete($id)
	{
		// code...
	}
}
