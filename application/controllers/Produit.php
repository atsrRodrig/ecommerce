<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//class Produit extends CI_Controller {

class Produit extends MY_Controller {

	public function information($idProduit)
	{
		//var_dump($idProduit);
		
		//$this->load->model('unProduit');		// c'est le unProduit.php situé dans le repertoire  models/unProduit.php
		
		$this->load->helper('form');		
		$this->load->library('form_validation');	// on charge la library pour la validation

		

		// il contient les  requetes et l'accès a la BDD
		
		//   $this->load->model('Produit_model');		// deja chargé dans l'autoload.PHP
		
		$resultatProduit = $this->Produit_model->loadProduit($idProduit);  // puis on recupere le contennu de la requete dans la variable $unProduit														
															// en appelant la methode loadProduit() avec l'id de larticle voulu
		//var_dump($resultatProduit);


		if(empty($resultatProduit))
		{
			show_404();
		}	
		
		
		// pour la verification des saisies si sont effectuées ;

		//$this->form_validation->set_message("less_than_equal_to","Le champ %s doit être inférieur à %s");

		$this->form_validation->set_rules("nomAuteur","Votre Nom","required|min_length[5]");
		$this->form_validation->set_rules("note","Note obligatorie","required|greater_than_equal_to[0]|less_than_equal_to[5]");
		$this->form_validation->set_rules("commentaire","Commentaire obligatotire","required|min_length[2]");

		
		$this->load->model("Commentaire_model");  // ainsi (hors du if) il peut etre appellé plusierus fois


		if ($this->form_validation->run() == TRUE)
        {
		 	
         	$insert = $this->input->post();

			$ins=['auteur'=>$insert['nomAuteur'],
			  'contenu'=> $insert['commentaire'],
			  'note'=>$insert['note'],
			  'datecommentaire'=>date('Y-m-d H:i:s'),
			  'produit_id'=>$idProduit	
			  ];

         	$this->Commentaire_model->insertCommentaire($ins,$idProduit);

         	$this->session->set_flashdata('success_com',"Votre commentaire a été inséré...");
			//var_dump($this->input->post());
         	
         	redirect("produit/information/".$idProduit);		// on est redirigé vers la page d'acceuil
      	
         	//$this->load->view('formsuccess');
        }
        else
        {
        	// $this->load->view('');
        }





        // affichage des commentaires une fois inseres
		$allComments = $this->Commentaire_model->loadAllComments($idProduit);
		//var_dump($allComments);
		
		
		// Moyenne et Nombre de commentaires
		$statistics = $this->Commentaire_model->calculStatistics($idProduit);
		//var_dump(round($statistics->moyenne));


		// on a recupere $unproduit retourné par la requete que l'on renvoi sur la view
		//$this->load->view('produit/unProduit',['unProduit'=>$unproduit]);   // c'est le unProduit.php situé dans le repertoire  views/produit
	
		
		// c'est le unProduit.php situé dans le repertoire  views/produit
		//$this->load->view('produit/unProduit',['unProduit'=>$resultatProduit,'allComments'=>$allComments,
		//	                           		   'statistics'=>$statistics]);

		$this->render('produit/unProduit',['unProduit'=>$resultatProduit,'allComments'=>$allComments,
			                           		   'statistics'=>$statistics]);	                           		    
	}




	public function marque($idMarque)
	{
		//var_dump($idMarque);
		
		$this->load->helper('text');	   // pour pouvoir manipuler le texte a découper en mots patiellement	

		$this->load->model('Produit_model');	// c'est le unProduit.php situé dans le repertoire  models/unProduit.php
												// il contient les  requetes et l'accès a la BDD
		
		// on a recupere $unproduit retourné par la requete que l'on renvoi sur la view
		$resultatProduit = $this->Produit_model->loadPdtsMarque($idMarque);  // puis on recupere le contennu de la requete dans la variable $unProduit														
																		// en appelant la methode loadProduit() avec l'id de larticle voulu
		//var_dump($resultatProduit);

		// on reaffiche les produits de la marque dans la view accueil
		//$this->load->view('accueil',['allProduits'=>$resultatProduit]); 
		$this->render('accueil',['allProduits'=>$resultatProduit]); 
	}




	public function commentairesProduit()
	{
		
		
		$resultatComments = $this->Commentaire_model->loadAllComments($idProduit);  // puis on recupere le contennu de la requete dans la variable $unProduit														
																		// en appelant la methode loadProduit() avec l'id de larticle voulu
		//var_dump($resultatComments);

		// on a recupere $unproduit retourné par la requete que l'on renvoi sur la view
		//$this->load->view('produit/unProduit',['unProduit'=>$unproduit]);   // c'est le unProduit.php situé dans le repertoire  views/produit
	
		
		// c'est le unProduit.php situé dans le repertoire  views/produit
		//$this->load->view('accueil',['allComments'=>$resultatComments]); 
		$this->render('accueil',['allComments'=>$resultatComments]); 

		//$this->load->view('accueil',['allProduits'=>$produits]);   
	}
}