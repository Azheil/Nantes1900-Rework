<?php

class Login extends CI_Controller {

	public function index()
	{
		$this->check_login();
	}

	public function __construct()
	{
		parent::__construct();

		//Ce code sera executé charque fois que ce contrôleur sera appelé
		
		$this->load->model('login_model', 'login');
		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->view('header');
	}
	
	public function check_login()
	{

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('accueil/body');
			$this->load->view('footer');
		}
		else
		{
			$check_login = $this->login->check_login_info($this->input->post('username'),$this->input->post('password'));

			if ( ! $check_login )
			{
			$this->load->view('accueil/fail_login');
			}
			else
			{
			$this->load->view('accueil/success_login', $check_login);
			}
		}

	}
}

/* End of file login.php */
/* Location : ./application/controllers/login.php */
