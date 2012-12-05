<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	
	public function check_login_info($username,$submitted_password)
	{
		
		//Connexion à la base de données
		$this->load->database();

		//Chargement de la gestion de hashage de mot de passe
		$this->load->helper('security');

		//Création de la requête
		$this->db->select('username, password, user_level');
		$this->db->from('users');
		$this->db->where('username', $username);
		$query = $this->db->get(); //Exécution

		$result = $query->result_array(); //Récupération des résultats
		$stored_password = $result['0']['password']; //On isole le mot de passe

		if (do_hash($submitted_password) != $stored_password)
		{
			return false;
		}
		else
		{
			$data = array();
			$data['username'] = $result['0']['username'];
			$data['user_level'] = $result['0']['user_level'];

			return $data;
		}

		
	}

}

/* End of file login_model.php */
/* Location : ./application/models/login_model.php */
