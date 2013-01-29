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
                )
);

/* End of file form_validation.php */
/* Location : ./application/config/form_validation.php */