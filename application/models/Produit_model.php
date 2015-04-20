<?php



class Produit_model extends CI_Model
{


	public function findLimit($nb=5)	// $nb=5 limite a 5 par defaut et qui pourra etre modifié en passage 
	{
		// 1ere methoe de requete
		$requete=$this->db->get('produit',$nb);  // une requete sur la table produit
		
		//var_dump($requete->result('Produit'));	// c'est la class produit pour avoir la mises en forme voulue
		$allproduits = $requete->result('Produit_model');
		//return $allproduits;

		
		$sql="SELECT produit.id,titre,produit.description,prix,image,marque.nom AS nomMarque,
		      AVG(note) AS moyenne,COUNT(note) AS nombre 
		      FROM produit 
		      LEFT JOIN commentaire ON produit.id=commentaire.produit_id
		      LEFT JOIN marque ON produit.marque_id=marque.id 
		      GROUP BY produit.id,titre,produit.description,prix,image,nomMarque LIMIT ?";

		$requete = $this->db->query($sql,[$nb]);	// equivalent du execute()

		//var_dump($requete->result('Produit_model'));

		return $requete->result('Produit_model');	// c'est le FETCH qui renvoyé en  type Objet <Produit_model>
	}





	public function displayImagesCaroussel()	 
	{
		
		//$sql="SELECT image FROM produit ORDER by prix DESC LIMIT 4";

		$sql="SELECT produit.id,titre,image,AVG(note) as moyenne 
		      FROM produit LEFT JOIN commentaire ON produit.id=commentaire.produit_id 
		      GROUP BY produit.id,titre,image ORDER BY moyenne DESC LIMIT 4";


		$requete2=$this->db->query($sql);
	
		//var_dump($requete2->result('Produit_model'));

		return $requete2->result('Produit_model');	// renvoyé en  type Objet <Produit_model>
	}




	public function loadProduit($idProduit)	 
	{
		
		// 1ere methoe de requete
		$requete=$this->db->get_where('produit',['id'=>$idProduit]);  // une requete sur la table produit
		
		//var_dump($requete->unbuffered_row('Produit_model'));	// c'est la class unProduit pour avoir la mise en forme voulue  type OBJET
		

		$sql="SELECT produit.*,marque.nom AS nomMarque FROM produit 
			  LEFT JOIN marque ON produit.marque_id=marque.id 
			  WHERE produit.id=?";
			  
		$requete2=$this->db->query($sql,[$idProduit]);
		//var_dump($requete2->unbuffered_row('Produit_model'));
		
		return $requete2->unbuffered_row('Produit_model'); // retourne un objet de la classe Produit_model sin ce serait
															// la classe de PHP par défaut
															// result == FETCH ALL  unbuffered_row == 1 FETCH
	}




	public function loadPdtsMarque($idMarque)	 
	{
				
		$sql="SELECT produit.id,titre,produit.description,prix,image,marque.nom AS nomMarque,
		      AVG(note) AS moyenne,COUNT(note) AS nombre 
		      FROM produit 
		      LEFT JOIN commentaire ON produit.id=commentaire.produit_id
		      LEFT JOIN marque ON produit.marque_id=marque.id 
		      WHERE marque_id=?
		      GROUP BY produit.id,titre,produit.description,prix,image,nomMarque";
      
		
		$requete2=$this->db->query($sql,[$idMarque]);
	
		//var_dump($requete2->result('Produit_model'));
		
		return $requete2->result('Produit_model'); // retourne un objet de la classe Produit_model sin ce serait
													// la classe de PHP par défaut
													// result == FETCH ALL  unbuffered_row == 1 FETCH
	}
	

	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}
}