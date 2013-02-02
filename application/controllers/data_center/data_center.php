<?php

class Data_center extends CI_Controller
{

	public function index()
	{
            $this->accueil();
	}

	public function __construct()
	{
            parent::__construct();

            //Ce code sera executé charque fois que ce contrôleur sera appelé
		
            $this->load->library('form_validation');
            $this->load->view('header');
	}
        
        public function accueil()
        {
            $this->load->view('data_center/data_center');
        }
        
        
}

/* End of file data_center.php */
/* Location: ./application/controllers/data_center/data_center.php */
