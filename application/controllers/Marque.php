<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//class Marque extends CI_Controller {
class Marque extends MY_Controller {
		
	
	public function index()
	{
		
		// load->helper permet de charger et mettre a dispo les fonctions telles que  site_url  et base_url 
		// a partir de codeigniter.com

		// $this->load->helper('url');  // je l'ai charge  de facon automatique dans l'autoloead  QUI EST  config/autoload.PHP
		

		$this->load->model('Marque_model');		// il contient la requete

		$marques = $this->Marque_model->findLimit();  // puis on recupere le contennu de la requete dans la variable $produits
												  // en appelant la methode findLimit() dans la class Produit du model chargé

		// tous les variables connues ICI doivent être transmises  dans la commande d'appel à la page dans views
		// c'est le accueil.php situé dans le repertoire  views
		// firstname est le nom de la variable connue dans la VUE associée la la viable du controlleur
		
		//$this->load->view('marque/toutesMarques',['allMarques'=>$marques]);   
		$this->render('marque/toutesMarques',['allMarques'=>$marques]);   
	
	}
}
