<?php

class Accueil extends CI_Controller
{

	public function index()
	{
		$this->accueil();
	}

	public function __construct()
	{
		parent::__construct();

		//Ce code sera executé charque fois que ce contrôleur sera appelé
		
		$this->load->view('header');
	}

	public function accueil()
	{
		$this->load->library('form_validation');
		$this->load->view('accueil/body');
		$this->load->view('footer');
	}

}

/* End of file accueil.php */
/* Location : ./application/controllers/accueil.php */
