<?php

class Ajout_relation extends CI_Controller
{

	public function index()
	{
            $this->formulaire();
	}

	public function __construct()
	{
            parent::__construct();

            //Ce code sera executé charque fois que ce contrôleur sera appelé
            
            $this->load->model('relation_model','relation');
            $this->load->model('objet_model','objet');
            $this->load->library('form_validation');
            $this->load->helper(array('form','dates'));
            $this->load->view('header');
            $this->load->view('data_center/data_center');
	}
        
        public function formulaire()
        {
            
            //On va récupérer une liste des objets existants dans la base, afin de les proposer
            $objet_list = $this->objet->get_objet_list();
            
            //On va récupérer une liste des types de relation existants dans la base, afin de les proposer
            $type_relation_list = $this->relation->get_type_relation_list();
            
            if ($this->form_validation->run('ajout_relation') == FALSE)
            {
                $data = array('objet_list' => $objet_list,'type_relation_list' => $type_relation_list);
                
                $this->load->view('data_center/ajout_relation', $data);
                $this->load->view('footer');
            }
            else
            {
                $relationdata = array();
                $relationdata['objet_id_1'] = $this->input->post('objet1');
                $relationdata['objet_id_2'] = $this->input->post('objet2');
                $relationdata['type_relation_id'] = $this->input->post('type_relation');
                $relationdata['username'] = $this->session->userdata('username');
                $relationdata['datation_indication_debut'] = $this->input->post('datation_indication_debut');
                $relationdata['datation_indication_fin'] = $this->input->post('datation_indication_fin');
                
                $dates_infos = conc_2_date($this->input->post('jour_debut'),$this->input->post('mois_debut'),$this->input->post('annee_debut'),$this->input->post('jour_fin'),$this->input->post('mois_fin'),$this->input->post('annee_fin'));
                                
                $relationdata['date_debut_relation'] = $dates_infos['date_debut'];
                $relationdata['date_fin_relation'] = $dates_infos['date_fin'];
                $relationdata['date_precision'] = $dates_infos['date_precision'];
                
                $relationdata['parent'] = $this->input->post('parent')? 'true':'false';
                             
                $this->relation->ajout_relation($relationdata);            
                redirect('data_center/data_center/','refresh');
                
                //TODO: Ajouter une page de confirmation du succès d'ajout de l'objet
            }
         
            
        }
        
        
}

/* End of file ajout_relation.php */
/* Location : ./application/controllers/data_center/ajout_relation.php */
