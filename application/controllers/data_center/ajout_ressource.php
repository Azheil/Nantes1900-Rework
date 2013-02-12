<?php

class Ajout_ressource extends CI_Controller
{

	public function index()
	{
            $this->choix_ressource();
	}

	public function __construct()
	{
            parent::__construct();

            //Ce code sera executé charque fois que ce contrôleur sera appelé
            
            $this->load->model('ressource_texte_model','ressource_texte');
            $this->load->library('form_validation');
            $this->load->helper(array('form','dates'));
            $this->load->view('header');            
            $this->load->view('data_center/data_center');
	}
        
        public function choix_ressource()
        {
            $this->load->view('data_center/choix_ressource');
        }
        
        public function formulaire_texte()
        {
            
            if ($this->form_validation->run('ajout_texte') == FALSE) //TODO: Rajouter dans la validation si une ressource du même nom existe déjà ou pas
            {
                $this->load->view('data_center/ajout_texte');
                $this->load->view('footer');
            }
            else
            {
                $textedata = array();
                $textedata['titre'] = $this->input->post('titre');
                $textedata['reference_ressource'] = $this->input->post('reference_ressource');
                $textedata['disponibilite'] = $this->input->post('disponibilite');
                $textedata['description'] = $this->input->post('description');
                $textedata['auteurs'] = $this->input->post('auteurs');
                $textedata['editeur'] = $this->input->post('editeur');
                $textedata['ville_edition'] = $this->input->post('ville_edition');
                
                //Le champ pagination ne peut pas rester vide
                if ( ! $this->input->post('pagination'))
                {
                    $textedata['pagination'] = '0';
                }
                else
                {
                    $textedata['pagination'] = $this->input->post('pagination');
                }
                
                $textedata['sous_categorie'] = $this->input->post('sous_categorie');
                $textedata['mots_cles'] = $this->input->post('mots_cles');
                $textedata['username'] = $this->session->userdata('username');
                                
                $date_infos = conc_date($this->input->post('jour'),$this->input->post('mois'),$this->input->post('annee'));
                                
                $textedata['date'] = $date_infos['date'];
                $textedata['date_precision'] = $date_infos['date_precision'];
                    
                $this->ressource_texte->ajout_texte($textedata);            
                redirect('data_center/data_center/','refresh');
                
                //TODO: Ajouter une page de confirmation du succès d'ajout de l'objet
            }
         
            
        }
        
        
}

/* End of file ajout_ressource.php */
/* Location : ./application/controllers/data_center/ajout_ressource.php */
