<?php


class Commentaire_model extends CI_Model
{

	public function insertCommentaire($ins,$idProduit)
	{
	

		$insert = $this->input->post();
		
		//var_dump($insert);	
		
		//var_dump($this->input->post());	
		//var_dump($insert['nomAuteur']);	
		//var_dump($ins);


		// on insert a partir du tableau reçu
		$this->db->insert('commentaire', $ins);

		
		/*		 Autre methode avec la requette directe 
		$sql = "INSERT INTO commentaire(auteur,contenu,note,datecommentaire,produit_id)
				VALUES (?,?,?,now(),?)";
		
		$this->db->query($sql, [$insert['nomAuteur'],$insert['commentaire'],$insert['note'],$idProduit]);
		*/
	}



	
	public function loadAllComments($idProduit)
	{
		//$sql = "SELECT * FROM commentaire ORDER BY datecommentaire DESC";
		
		$allComments = $this->db->get_where('commentaire', array('produit_id' => $idProduit));
		//var_dump($allComments->result('Commentaire_model'));
		
		return($allComments->result('Commentaire_model'));
		//var_dump($allComments->result('Commentaire_model'));
		
	}



	
	public function calculStatistics($idProduit)
	{
		  
		$sql = "SELECT AVG(note) as moyenne,COUNT(id) as nombre FROM commentaire WHERE produit_id=?";
		
		$statistics = $this->db->query($sql,[$idProduit]);
		//var_dump($statistics->result('Commentaire_model'));
		
		return($statistics->unbuffered_row('Commentaire_model'));				// c'est comme un fetch
	}
}