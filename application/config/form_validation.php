<?php
$config = array(
    'signin'=>  array(
                    array(
                        'field'=>'username',
                        'label'=>'Username',
                        'rules'=>'trim|required|min_length[5]|max_length[12]|xss_clean'
                    ),
                    array(
                        'field'=>'password1',
                        'label'=>'Password1',
                        'rules'=>'required|matches[password2]'
                    ),
                    array(
                        'field'=>'password2',
                        'label'=>'Password2',
                        'rules'=>'required',
                    ),
                    array(
                        'field'=>'nom',
                        'label'=>'Nom',
                        'rules'=>'trim|required|min_length[2]|max_length[12]|xss_clean'
                    ),
                    array(
                        'field'=>'prenom',
                        'label'=>'Prenom',
                        'rules'=>'trim|required|min_length[2]|max_length[12]|xss_clean'
                    )
                ),
    
    'login' => array(
                    array(
                        'field'=>'username',
                        'label'=>'Username',
                        'rules'=>'trim|required|min_length[5]|max_length[12]|xss_clean'
                    ),
                    array(
                        'field'=>'password',
                        'label'=>'Password',
                        'rules'=>'required|callback_check_login_info'
                    )
                ),
    
    'ajout_objet' => array(
                    array(
                        'field'=>'nom_objet',
                        'label'=>'Nom_objet',
                        'rules'=>'trim|required|min_length[5]|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'resume',
                        'label'=>'Resume',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'historique',
                        'label'=>'Historique',
                        'rules'=>'trim|max_length[500]|xss_clean'
                    ),
                    array(
                        'field'=>'description',
                        'label'=>'Description',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'adresse_postale',
                        'label'=>'Adresse_postale',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'mots_cles',
                        'label'=>'Mots_cles',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    )
                ),
    
    'ajout_texte' => array(
                    array(
                        'field'=>'titre',
                        'label'=>'Titre',
                        'rules'=>'trim|required|min_length[5]|max_length[50]|xss_clean'
                    ),
                    array(
                        'field'=>'reference_ressource',
                        'label'=>'Reference_ressource',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'disponibilite',
                        'label'=>'Disponibilite',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'description',
                        'label'=>'Description',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'auteurs',
                        'label'=>'Auteurs',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'editeur',
                        'label'=>'editeur',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'ville_edition',
                        'label'=>'Ville_edition',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'mots_cles',
                        'label'=>'Mots_cles',
                        'rules'=>'trim|max_length[200]|xss_clean'
                    ),
                    array(
                        'field'=>'sous_categorie',
                        'label'=>'Sous_categorie',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'pagination',
                        'label'=>'Pagination',
                        'rules'=>'trim|is_natural|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'jour',
                        'label'=>'Jour',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'mois',
                        'label'=>'Mois',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'annee',
                        'label'=>'Annee',
                        'rules'=>'trim|is_natural_no_zero|max_length[4]|xss_clean'
                    )
                ),
    'ajout_relation' => array(
                    array(
                        'field'=>'jour_debut',
                        'label'=>'Jour_debut',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'mois_debut',
                        'label'=>'Mois_debut',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'annee_debut',
                        'label'=>'Annee_debut',
                        'rules'=>'trim|is_natural_no_zero|max_length[4]|xss_clean'
                    ),
                    array(
                        'field'=>'jour_fin',
                        'label'=>'Jour_fin',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'mois_fin',
                        'label'=>'Mois_fin',
                        'rules'=>'trim|is_natural|max_length[2]|xss_clean' //TODO : Rajouter une custom rule vérifiant la validité de la date
                    ),
                    array(
                        'field'=>'annee_fin',
                        'label'=>'Annee_fin',
                        'rules'=>'trim|is_natural_no_zero|max_length[4]|xss_clean'
                    ),
                    array(
                        'field'=>'datation_indication_debut',
                        'label'=>'Datation_indication_debut',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    ),
                    array(
                        'field'=>'datation_indication_fin',
                        'label'=>'Datation_indication_fin',
                        'rules'=>'trim|max_length[20]|xss_clean'
                    )
                )
);

/* End of file form_validation.php */
/* Location : ./application/config/form_validation.php */