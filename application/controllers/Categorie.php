<?php

defined('BASEPATH') OR exit('No direct script access allowed');



//class Categorie extends CI_Controller {
class Categorie extends MY_Controller {


	public function information($idCategorie)
	{
		
		//$this->load->helper('text');	// pour pouvoir manipuler le texte a découper en mots patiellement DEJA CHARGE	

		
		//$this->load->model('Categorie_model');	// il contient la requete   mais est déjà chargé dans l'autoload.php

		// on a recupere $allPdtsCategorie retourné par la requete que l'on renvoi sur la view
		$allPdtsCategorie = $this->Categorie_model->loadPdtsCategorie($idCategorie);  // puis on recupere le contennu de la requete dans la variable $allPdtsCategorie														
															// en appelant la methode loadProduit() avec l'id de larticle voulu
		//var_dump($allPdtsCategorie);

		
		// pour avoir le nom de la categorie
		$uneCategorie = $this->Categorie_model->getUneCategorie($idCategorie);

		//var_dump($uneCategorie);

/*
		if(empty($allPdtsCategorie) )
		{
			show_404();
		}
		
*/
		// if(isset($allPdtsCategorie))
		// {
			
			
			//$this->load->view('categorie/allcategories',['allProduits'=>$allPdtsCategorie,'uneCategorie'=>$uneCategorie]); 

			$this->render('categorie/allcategories',['allProduits'=>$allPdtsCategorie,'uneCategorie'=>$uneCategorie]); 
<<<<<<< HEAD
=======
			$this->load->view('categorie/allcategories',['allProduits'=>$allPdtsCategorie,'uneCategorie'=>$uneCategorie]); 
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

			// on reaffiche les produits de la categorie dans la view accueil
			//$this->load->view('accueil',['allProduits'=>$allPdtsCategorie]); 

		// }
		/*
		else
		{
			    	
         	redirect("categorie/information/".$idCategorie);		// on est redirigé vers la page d'acceuil
		}*/
	}

}
