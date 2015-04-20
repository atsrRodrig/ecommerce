<?php


class Marque_model extends CI_Model
{

	public function findLimit($nb=6)	// $nb=6 limite a 5 par defaut et qui pourra etre modifié en passage 
	{
		
		// 1ere methoe de requete
		//$requete=$this->db->get('marque',$nb);  // une requete sur la table produit
		
		//var_dump($requete->result('Marque_model'));	// c'est la class produit pour avoir la mises en forme voulue
				
		//$allMarques = $requete->result('Marque_model');
		//return $allMarques;

		
		$sql="SELECT * FROM marque LIMIT ?";
		$requete2=$this->db->query($sql,[$nb]);
	
		//var_dump($requete2->result('Marque_model'));

		return $requete2->result('Marque_model');	// renvoyé en  type Objet <Produit_model>
	}
}