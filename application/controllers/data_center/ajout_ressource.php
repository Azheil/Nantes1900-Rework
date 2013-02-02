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
            
            $this->load->model('data_process_model','add_data');
            $this->load->library('form_validation');
            $this->load->helper(array('form'));
            $this->load->view('header');
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
                
                //Calcul automatique du jour
                if( ! $this->input->post('jour') )
                {
                    $jour = '01';
                }
                else
                {
                    $jour = $this->input->post('jour');
                }
                
                //Calcul automatique du mois
                if( ! $this->input->post('mois') )
                {
                    $mois = '01';
                }
                else
                {
                    $mois = $this->input->post('mois');
                }
                
                //On concaténe la date complète
                $textedata['date'] = $jour."/".$mois."/".$this->input->post('annee');
                
                //Calcul automatique de la précision de la date
                if( ! $this->input->post('jour') )
                {
                    if( ! $this->input->post('mois') )
                    {
                        $textedata['date_precision'] = 'Année';
                    }
                    else
                    {
                        $textedata['date_precision'] = 'Mois';
                    }
                }
                else
                {
                    $textedata['date_precision'] = 'Jour';
                }
                
                $this->add_data->ajout_texte($textedata);
                
                //TODO: Ajouter une page de confirmation du succès d'ajout de la ressource, puis rediriger vers le data_center
            }
         
            
        }
        
        
}

/* End of file ajout_ressource.php */
/* Location : ./application/controllers/data_center/ajout_ressource.php */
