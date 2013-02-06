<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_process_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Connexion à la base de données
		$this->load->database();

	}
        
        public function ajout_objet($objetdata)
        {
            //Création de la requête
            $this->db->set('username', $objetdata['username']);
            $this->db->set('nom_objet', $objetdata['nom_objet']);
            $this->db->set('resume', $objetdata['resume']);
            $this->db->set('historique', $objetdata['historique']);
            $this->db->set('description', $objetdata['description']);
            $this->db->set('adresse_postale', $objetdata['adresse_postale']);
            $this->db->set('mots_cles', $objetdata['mots_cles']);
            $this->db->insert('objet'); //Exécution
        }
        
        public function ajout_texte($textedata)
        {
            //Création de la requête
            $this->db->set('username', $textedata['username']);
            $this->db->set('titre', $textedata['titre']);
            $this->db->set('reference_ressource', $textedata['reference_ressource']);
            $this->db->set('disponibilite', $textedata['disponibilite']);
            $this->db->set('description', $textedata['description']);
            $this->db->set('auteurs', $textedata['auteurs']);
            $this->db->set('editeur', $textedata['editeur']);
            $this->db->set('pagination', $textedata['pagination']);
            $this->db->set('ville_edition', $textedata['ville_edition']);
            $this->db->set('sous_categorie', $textedata['sous_categorie']);
            $this->db->set('mots_cles', $textedata['mots_cles']);
            $this->db->set('date_debut_ressource', $textedata['date']);
            $this->db->set('date_precision', $textedata['date_precision']);
            $this->db->insert('ressource_textuelle'); //Exécution            
        }
        
        public function ajout_relation($relationdata)
        {
            //Création de la requête
            $this->db->set('username', $relationdata['username']);
            $this->db->set('objet_id_1', $relationdata['objet_id_1']);
            $this->db->set('objet_id_2', $relationdata['objet_id_2']);
            $this->db->set('datation_indication_debut', $relationdata['datation_indication_debut']);
            $this->db->set('datation_indication_fin', $relationdata['datation_indication_fin']);
            $this->db->set('date_debut_relation', $relationdata['date_debut_relation']);
            $this->db->set('date_fin_relation', $relationdata['date_fin_relation']);
            $this->db->set('date_precision', $relationdata['date_precision']);            
            $this->db->set('parent', $relationdata['parent']);
            $this->db->set('type_relation_id', $relationdata['type_relation_id']);
            $this->db->insert('relation'); //Exécution            
        }
        
        public function get_objet_list()
        {
            $this->db->select('objet_id, nom_objet');
            $query = $this->db->get('objet');
            return $query->result_array();
        }
        
        public function get_type_relation_list()
        {
            $this->db->select('type_relation_id, type_relation');
            $query = $this->db->get('type_relation');
            return $query->result_array();
        }
}

/* End of file data_process_model.php */
/* Location: ./application/models/data_process_model.php */