<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
<?php

class unProduit extends CI_Model
{

	public function loadProduit($idProduit)	 
	{
		
		// 1ere methoe de requete
		$requete=$this->db->get('produit',$idProduit);  // une requete sur la table produit
		
		//var_dump($requete->result('unProduit'));	// c'est la class unProduit pour avoir la mise en forme voulue  type OBJET
		$unproduit = $requete->result('unProduit');
		//return $unproduit;

		$sql="SELECT * FROM produit WHERE id=?";
		$requete2=$this->db->query($sql,[$idProduit]);
	
		//var_dump($requete2->result('unProduit'));

		return $requete2->result('unProduit');	
	}


	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}

<<<<<<< HEAD
=======
=======
<?php

class unProduit extends CI_Model
{

	public function loadProduit($idProduit)	 
	{
		
		// 1ere methoe de requete
		$requete=$this->db->get('produit',$idProduit);  // une requete sur la table produit
		
		//var_dump($requete->result('unProduit'));	// c'est la class unProduit pour avoir la mise en forme voulue  type OBJET
		$unproduit = $requete->result('unProduit');
		//return $unproduit;

		$sql="SELECT * FROM produit WHERE id=?";
		$requete2=$this->db->query($sql,[$idProduit]);
	
		//var_dump($requete2->result('unProduit'));

		return $requete2->result('unProduit');	
	}


	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}

>>>>>>> 04ad2937440804db8750cfd4681288e738658aeb
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
}