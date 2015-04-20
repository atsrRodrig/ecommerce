<?php


class Categorie_model extends CI_Model
{

	public function getCategories()
	{

		//$sql = "SELECT * FROM categorie";
		
		$allCategories = $this->db->get('categorie');
		// var_dump($allCategories->result('Categorie_model'));
		
		return($allCategories->result('Categorie_model'));
	}

	


	public function getUneCategorie($idCategorie)
	{
		
		$requete = $this->db->get_where('categorie',['id'=>$idCategorie]);
		
		//ATTENTION le var_dump bloque le unbuffered_row dans le return il fuat metre le resultat dans une variable
		//var_dump($requete->unbuffered_row('Categorie_model'));
		
		return $requete->unbuffered_row('Categorie_model');
	}




	public function loadPdtsCategorie($idCategorie)
	{
		/*
		$sql="SELECT produit.*,idcategorie,marque.nom AS nomMarque,categorie.nom AS nomCategorie,
		      AVG(note) AS moyenne,COUNT(note) AS nombre 
			  FROM produit,produit_categorie,marque,commentaire
			  WHERE produit.id=produit_categorie.idproduit
			  AND categorie.id=produit_categorie.idcategorie
			  AND commentaire.produit_id=produit.id
			  AND marque.id=produit.marque_id
			  AND idcategorie=? GROUP BY produit.id";
		*/
		
		$sql="SELECT produit.*,idcategorie,marque.nom AS nomMarque,categorie.nom AS nomCategorie,
			  AVG(note) AS moyenne,COUNT(note) AS nombre 
			  FROM produit
			  INNER JOIN produit_categorie ON produit.id=produit_categorie.idproduit
			  INNER JOIN categorie ON categorie.id=produit_categorie.idCategorie
			  LEFT JOIN commentaire ON commentaire.produit_id=produit.id
			  INNER JOIN marque ON marque.id=produit.marque_id
			  WHERE idcategorie=? GROUP BY produit.id";

		$requete=$this->db->query($sql,[$idCategorie]);				// ==  DECLARE
		
		//var_dump($requete->result('Categorie_model'));

		return $requete->result('Categorie_model');					// == EXECUTE
	}


	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}
}		