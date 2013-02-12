<?php

class Ajout_objet extends CI_Controller
{

	public function index()
	{
            $this->formulaire();
	}

	public function __construct()
	{
            parent::__construct();

            //Ce code sera executé charque fois que ce contrôleur sera appelé
            
            $this->load->model('objet_model','objet');
            $this->load->library('form_validation');
            $this->load->helper(array('form'));
            $this->load->view('header');            
            $this->load->view('data_center/data_center');
	}
        
        public function formulaire()
        {
            
            if ($this->form_validation->run('ajout_objet') == FALSE) //TODO: Rajouter dans la validation si un objet du même nom existe déjà ou pas
            {
                $this->load->view('data_center/ajout_objet');
                $this->load->view('footer');
            }
            else
            {
                $objetdata = array();
                $objetdata['nom_objet'] = $this->input->post('nom_objet');
                $objetdata['resume'] = $this->input->post('resume');
                $objetdata['historique'] = $this->input->post('historique');
                $objetdata['description'] = $this->input->post('description');
                $objetdata['adresse_postale'] = $this->input->post('adresse_postale');
                $objetdata['mots_cles'] = $this->input->post('mots_cles');
                $objetdata['username'] = $this->session->userdata('username');
                
                $this->objet->ajout_objet($objetdata);            
                redirect('data_center/data_center/','refresh');
                
                //TODO: Ajouter une page de confirmation du succès d'ajout de l'objet
            }
         
            
        }
        
        
}

/* End of file ajout_objet.php */
/* Location : ./application/controllers/data_center/ajout_objet.php */
