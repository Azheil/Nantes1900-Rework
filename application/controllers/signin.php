<?php

class Signin extends CI_Controller {

	public function index()
	{
		$this->check_signin();
	}

	public function __construct()
	{
		parent::__construct();

		//Ce code sera executé charque fois que ce contrôleur sera appelé
		
		$this->load->model('signin_model','signin');
		$this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->view('header');
	}

	public function check_signin()
	{
		
		$this->form_validation->set_rules('password1', 'Password1', 'required');
		$this->form_validation->set_rules('password2', 'Password2', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[5]|max_length[12]|xss_clean');

		if (($this->form_validation->run() == FALSE) || ($this->input->post('password1') != $this->input->post('password2')))
		{
			$this->load->view('accueil/signin/error_formulaire_signin');
			$this->load->view('footer');
		}
		else if ($this->signin->check_ifuserexists($this->input->post('username')) == 1)
		{
			$this->load->view('accueil/signin/username_already_exists');
			$this->load->view('footer');
		}
		else
		{
			$userdata = array();
			$userdata['username'] = $this->input->post('username');
			$userdata['password'] = $this->input->post('password1');
			$userdata['nom'] = $this->input->post('nom');
			$userdata['prenom'] = $this->input->post('prenom');			

			$this->signin->create_user($userdata);

			//TO DO : Rajouter une connexion automatique après l'inscription
			
			
		}
	}
}

/* End of file signin.php */
/* Location : ./application/controllers/signin.php */
