<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class Main extends CY_Controller {
class Main extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

<<<<<<< HEAD
=======

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

	public function index()
	{
		
<<<<<<< HEAD
		
=======
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		// GESTION DES COOKIES


												// depuis le 01/01/1970 et cela jusqu'a  jour J + 2 jours en Sec
		//set_cookie('test',"ceci est un test de cookie",time()+172800);  //  temps en secondes  si 0=durée de la session uniquement

		//var_dump(get_cookie("test"));

		// delete_cookie('test');



<<<<<<< HEAD
=======


>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		// load->helper permet de charger et mettre a dispo les fonctions telles que  site_url  et base_url 
		// a partir de codeigniter.com

		// $this->load->helper('url');  // je l'ai charge  de facon automatique dans l'autoloead  QUI EST  config/autoload.PHP
				
		// $prenom = "Antonio";   // pour test impossible à récuperer dans la view donc on passe un parametre cid-dessous

		
		$this->load->helper('text');	// pour pouvoir manipuler le texte a découper en mots patiellement déjà chargé dans l'autoload

		//$this->load->model('Produit');
		$this->load->model('Produit_model');	// il contient la requete   déjà chargé dans l'autoload
		
		//$this->load->model('Marque_model');	   // il contient la requete

		$produits = $this->Produit_model->findLimit();  // puis on recupere le contennu de la requete dans la variable $produits
													   // en appelant la methode findLimit() dans la class Produit du model chargé
		
		

		// tous les variables connues ICI doivent être transmises  dans la commande d'appel à la page dans views
		// c'est le accueil.php situé dans le repertoire  views
		// firstname est le nom de la variable connue dans la VUE associée la la viable du controlleur
		


		// Penser a loader  le MODEL  sinon mettre dans autoload.php
		//var_dump($this->Marque_model->findLimit());


		// $this->load->view('accueil',['allProduits'=>$produits,'allImages'=>$images]);
		

		//$this->load->view('accueil',['allProduits'=>$produits]); 

		$this->render('accueil',['allProduits'=>$produits]); 
	}
}