<?php

class Data_center extends CI_Controller
{

	public function index()
	{
            $this->data_center();
	}

	public function __construct()
	{
            parent::__construct();

            //Ce code sera executé charque fois que ce contrôleur sera appelé
		
            $this->load->library('form_validation');
            $this->load->view('header');
	}
        
        public function data_center()
        {
            if ( $this->session->userdata('user_level') == 5)
            {
                $this->load->view('data_center/data_center');
            }
            else if ( !$this->session->userdata('username') )
            {
                $this->load->view('accueil/login/formulaire_login',array('titre'=>'Vous n\'êtes pas connecté. Veuillez vous connecter :'));
            }
            
        }
        
        
}

/* End of file data_center.php */
/* Location: ./application/controllers/data_center/data_center.php */
