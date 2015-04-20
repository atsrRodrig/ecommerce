<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//class Panier extends CI_Controller {
class Panier extends MY_Controller {	

<<<<<<< HEAD

	public function index()
	{
		
		// c'est le helper que nous avons crée dans le repertoire  helpers  le _helper ne doit pas figurer
		$this->load->helper("monsuper");

=======
	public function index()
	{
		



		// c'est le helper que nous avons crrée dans le repertoire  helpers  le _helper ne doit pas ficgurer
		$this->load->helper("monsuper");



>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		//var_dump(unserialize(get_cookie("cadie")));
		
		// on le récupère depuis la forme STRING (chaine de caracteres)
		$panier = get_cookie("cadie");
<<<<<<< HEAD
		
=======
class Panier extends CI_Controller
{


	public function index()
	{
		//var_dump(unserialize(get_cookie("cadie")));
		
		// on le récupère depuis la forme STRING (chaine de caracteres)
		$panier = unserialize(get_cookie("cadie"));

		//var_dump($panier);
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

		$allProduits =[];

		if(!empty($panier))
		{	
			$this->load->model('Panier_model');	// il contient la requete   déjà chargé dans l'autoload

			// on a recupere $allProduits retourné par la requete que l'on renvoi sur la view
			$allProduits = $this->Panier_model->displayProduitsPanier(array_keys($panier));  // puis on recupere le contennu de la requete dans la variable $allPdtsCategorie														
											// en appelant la methode displayProduitsPanier() avec le tableau contrenant le panier
<<<<<<< HEAD
=======
			
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		}	

		//var_dump($allProduits);
		//var_dump($panier);
		
		// on charge la vue  
		//$this->load->view('panier/monpanier',['allProduits'=>$allProduits,'panier'=>$panier]); 
		$this->render('panier/monpanier',['allProduits'=>$allProduits,'panier'=>$panier]); 
<<<<<<< HEAD
=======
		$this->load->view('panier/monpanier',['allProduits'=>$allProduits,'panier'=>$panier]); 
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
	}




	public function ajout()
	{
		
		//var_dump($_POST);
		//var_dump($this->input->post());


		//if(empty($_POST['nbrProduits']) || empty($_POST['idProduit']) )
<<<<<<< HEAD
		
		$varQty = ($this->input->post('nbrProduits'));
		$varId = ($this->input->post('idProduit'));

		if(!empty($varQty) || !empty($varId))
=======
		if(empty($this->input->post('nbrProduits')) || empty($this->input->post('idProduit')))
		var_dump($_POST);
		var_dump($this->input->post());

		if(empty($_POST['nbrProduits']) || empty($_POST['idProduit']) )
		//if(empty($this->input->post('nbrProduits')) || empty($this->input->post('idProduit')))
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		{
			//die("parti");
			redirect('main');
		}


<<<<<<< HEAD
=======

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		// GESTION DES COOKIES   on prepare le panier a garder sous forme de cookie
		
		// on recupere les variables depuis le $_POST reçu sous forme d'objet
		$idProduit = $this->input->post('idProduit');	
		$nbrProduits = $this->input->post('nbrProduits');


		//var_dump(get_cookie("cadie"));
		//var_dump(unserialize(get_cookie("cadie")));


		// on le récupère depuis la forme STRING (chaine de caracteres)
		$panier = get_cookie("cadie");
<<<<<<< HEAD
=======
		$panier = unserialize(get_cookie("cadie"));
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

		if(empty($panier))
		{
			$panier = [];	// on crée le tableau vide s'il n'existe pas ou c'est le premier passage
		}	

<<<<<<< HEAD
		//var_dump($panier);
		//die('stop');
=======
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527


		if(isset($panier[$idProduit]))
		{	// on a deja commande pour ce produit donc on cumule la quantité
			$panier[$idProduit] = intval($panier[$idProduit]) + intval($nbrProduits);

		}
		else 
		{	// premiére quantité saisie pour cet article 

			$panier[$idProduit] = intval($nbrProduits);	
		}	


		// on RE-crée le panier  donc il faut le sauvegarder sion sera ecrasé
		//set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
<<<<<<< HEAD
		
		set_cookie('cadie', $panier); 
		
		//var_dump($panier);
		//die('stop');
=======
		set_cookie('cadie', $panier); 
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

		redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 
	}


	

	public function action($choix,$idProduit)
	{
        
        // on le récupère depuis la forme STRING (chaine de caracteres)
       
        //$panier = unserialize(get_cookie("cadie"));
		$panier = get_cookie("cadie");

<<<<<<< HEAD
		
		//var_dump($panier);
		//die("Supprimer");
       

=======

                       
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		if(!empty($panier))
		{
			if(array_key_exists($idProduit, $panier))	
			{	
				switch ($choix) 
				{
					case 'supprimer':
										
						unset($panier[$idProduit]);
<<<<<<< HEAD
						
						$this->session->set_flashdata('success_com',"Produit a été supprimé...");
						break;


=======
						$this->session->set_flashdata('success_com',"Produit a été supprimé...");
						break;

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
					case 'ajouter':
						
						if($panier[$idProduit]+1  <= 100 )
						{
							$panier[$idProduit] = $panier[$idProduit] + 1  ;
							//$this->session->set_flashdata('success_com',"Quantité augmentée de 1.");
						}
						else
						{
							$this->session->set_flashdata('success_com',"La quantité est au maximun.");
						}	
						break;


					case 'enlever':
						
						if($panier[$idProduit]-1  > 0 )
						{
							$panier[$idProduit] = $panier[$idProduit] - 1  ;
							//$this->session->set_flashdata('success_com',"Quantité diminuée de 1.");	
						}
						else
						{
							$this->session->set_flashdata('success_com',"La quantité est au minimun.");
						}	
						break;

					default:
						# code...
						break;
				}
			}
			// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 	
			//set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
			set_cookie('cadie', $panier); 
		}
		redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 	
<<<<<<< HEAD
=======
		set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
	

		redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
	}
}		