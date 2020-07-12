<?php

/**
*
*/
class Users extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->output->set_content_type('application/json', 'UTF-8');
		$_POST = json_decode(file_get_contents("php://input"), true);
	}

	public function index()
	{
		$db = $this->db->select(['id','email']);
		$db = $db->where('id <>',1);
		$db = $this->filter_by_keywords($db);
		$db = $this->db->get('users')->result_array();
		$this->output->set_output(json_encode([
			'data' => $db
		]));
	}

	private function filter_by_keywords($db)
	{
		$this->form_validation->set_rules('keywords', 'keywords', 'required');
		if ($this->form_validation->run()) {
			$db = $db->like('email', $this->input->post('keywords'))
			->or_like('username', 'like', '%'.$this->input->post('keywords').'%');
		}
		return $db;
	}


}
