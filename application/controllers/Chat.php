<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//class Panier extends CI_Controller {
class Chat extends MY_Controller {	

	public function index()
	{


		$this->load->helper('form');	// peut etre mis dans l'autoload.php
		$this->load->library('form_validation');	// on charge la library pour la validation
		$this->load->model('Chat_model');	// le Chat_model.php situé dans le repertoire  models/Chat_model.php



		$allChats = $this->Chat_model->loadAllChats();  // on recupere le contennu de la requete dans la variable $allChats														
												// que l'on va afficher dans la page  <discuter>
		//var_dump($allChats);
		//die('AllChats');

		// ce sont les auteurs des messages	
		$allUsers = $this->Chat_model->loadAllUsers();  // on recupere le contennu de la requete dans la variable $allChats														



		$insert = $this->input->post();	// on recupre depuis la formulaire validé par le bouton <valider>


		//var_dump($insert);
		//var_dump($this->input->post());	


		// on teste l'intégrité des données saisies

		$this->form_validation->set_rules("auteur","Votre Nom","required|min_length[2]");
		$this->form_validation->set_rules("contenu","Saisie obligatotire","required|min_length[2]");

		//die('insert');



		if ($this->form_validation->run() == TRUE)
        {


			
			$newIinsert = ['auteur'=>$insert['auteur'],
				  'contenu'=> $insert['contenu'],
				  'date_message'=>date('Y-m-d H:i:s'),
				  ];
	    	
	    	//var_dump($newIinsert);
			//die('insert');
			

			// on insert dans la table 'message' a partir du tableau reçu
			$this->db->insert('message', $newIinsert);

			$this->session->set_flashdata('success_ins',"Votre commentaire a été inséré dans la base de données.");
			

			// pour afficher le nouvel Chat inseré
			$allChats = $this->Chat_model->loadAllChats();  // on recupere le contennu de la requete dans la variable $allChats														
															// que l'on va afficher dans la page  <discuter>
			
			$allUsers = $this->Chat_model->loadAllUsers(); 
			
			


			// pour l'AJAX    pour resoudre pb de page non rafraichie		        	
        	
			if($this->input->is_ajax_request())
			{	
        		die(json_encode(["csrf"=>$this->security->get_csrf_hash() ])); // C'EST LE MEME QUE DANS LE footer
        															// IL EST REPOSITIONNE DANS L'AJAX
        															// CELUI DU FORMULAIRE RESTE toujours LE MEME

        	}

			redirect('chat',['allChats'=>$allChats,'allUsers'=>$allUsers]);
		
		}
		else 
		{
			//die('pAS insert');
			//redirect('chat');		// on repart sur la page <chat>
		}	


		
    	if($this->input->is_ajax_request())  	// en AJAX  
		{	 
			die(json_encode(["messages"=>$this->load->view("chat/ajaxmessage.php",["allChats"=>$allChats],TRUE)]));
		}

		$this->render("chat/discuter",['allChats'=>$allChats,'allUsers'=>$allUsers]);
	}
}