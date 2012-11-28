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

		$this->load->view('accueil/header');
		$this->load->view('accueil/body');
		$this->load->view('footer');
	}

	public function accueil()
	{
		
	}
}

/* End of file accueil.php */
/* Location : ./application/controllers/accueil.php */
