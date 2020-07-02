<?php

/**
*
*/
class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('logged_in') === 1) {
			redirect('auth/dashboard');
		}

		$this->load->model('basic');
	}

	public function index()
	{
		$data = [
			'csrf' => [
				'name' => $this->security->get_csrf_token_name(),
		        'hash' => $this->security->get_csrf_hash(),
				'type' => 'hidden'
			],
			'username' => [
				'name' => 'username',
				'type' => 'text',
				'placeholder' => 'Username',
			],
			'password' => [
				'name' => 'password',
				'type' => 'password',
				'placeholder' => 'Password'
			],
			'submit' => [
				'name' => 'submit',
				'value' => 'Submit'
			]
		];
		$this->load->view('pages/login', $data);
	}

	public function login()
	{
		if ($this->session->userdata('logged_in')==1) {
			redirect('auth/dashboard', 'location');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == false) {
			redirect('auth');
		}else {
			$username		= strip_tags($this->input->post("username", true));
			$password 		= md5(strip_tags($this->input->post("password", true)));
			$info=$this->basic->get_data(
				'users',
				[
					'where' => [
						'username' => $username,
						'password' => $password,
						'users.status' => "1"
					]
				],
				[
					'users.*'
				],
				'',
				'',
				'',
				'',
				'',
				1
			);
			$count=$info['extra_index']['num_rows'];
			if ($count==0) {
				$this->session->set_flashdata('login_msg', 'Invalid username or password');
				redirect(uri_string());
			} else {
				unset($info['extra_index']);
				$exist = $info[0]['id'] ?? false;
				if ($exist) {

					$this->session->set_userdata('logged_in', 1);
					$this->session->set_userdata('user_id', $info[0]['id']);
					$this->session->set_userdata('username', $info[0]['username']);
					$this->session->set_userdata('user_type', $info[0]['user_type']);

					$real_name = $info[0]['first_name'];
					$real_name .= ' '.$info[0]['last_name'];
					$this->session->set_userdata('user_real_name', $real_name);

					redirect('auth/dashboard', 'location');
				}
			}
		}
	}
}
