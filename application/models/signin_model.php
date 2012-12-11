<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		//Connexion à la base de données
		$this->load->database();

	}

	public function create_user($userdata)
	{

		//Chargement de la gestion de hashage de mot de passe
		$this->load->helper('security');

		//Création de la requête
		$this->db->set('username', $userdata['username']);
		$this->db->set('password', do_hash($userdata['password']));
		$this->db->set('user_level', 1); //Par défaut, l'utilisateur possède les droits les plus bas
		$this->db->set('timestamp', now()); //TO DO : Ajouter la véritable date d'inscription
		$this->db->set('nom', $userdata['nom']); //TO DO : Ajouter le champ "nom" dans le formulaire
		$this->db->set('prenom', $userdata['prenom']); //TO DO : Ajouter le champ "prenom" dans le formulaire
		$this->db->insert('users');


	}

	public function check_ifuserexists($username)
	{

		//Création de la requête
		$this->db->select('username');
		$this->db->from('users');
		$this->db->where('username', $username);
		$exists = $this->db->count_all_results(); //Renvoie 0 si le nom d'utilisateur proposé n'existe pas déjà

		return $exists;
		
	}

}

/* End of file signin_model.php */
/* Location : ./application/models/signin_model.php */
