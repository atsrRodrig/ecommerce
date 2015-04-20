<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Panier_model extends CI_Model
{

	public function displayProduitsPanier($panier)
	{
		//var_dump($panier);

		
		$sql="SELECT * FROM produit WHERE id IN ?";

		$allProduits = $this->db->query($sql,[$panier]);

		//var_dump($allProduits->result('Panier_model'));
		
		return($allProduits->result('Panier_model'));			// c'est comme un fetch	
	}


	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}
}		