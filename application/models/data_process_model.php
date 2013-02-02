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
}

/* End of file data_process_model.php */
/* Location: ./application/models/data_process_model.php */