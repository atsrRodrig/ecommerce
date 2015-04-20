<?php

class Produit extends CI_Model
{

	public function findLimit($nb=5)	// $nb=5 limite a 5 par defaut et qui pourra etre modifié en passage 
	{
		
		// 1ere methoe de requete
		$requete=$this->db->get('produit',$nb);  // une requete sur la table produit
		
		//var_dump($requete->result('Produit'));	// c'est la class produit pour avoir la mises en forme voulue
		$allproduits = $requete->result('Produit');
		

		$sql="SELECT * FROM produit LIMIT ?";
		$requete2=$this->db->query($sql,[$nb]);
	
		//var_dump($requete2->result('Produit'));

		return $requete2->result('Produit');	
	}


	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}

}