<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Chat_model extends CI_Model
{

	public function loadAllChats()
	{

		//$sql = "SELECT * FROM message ORDER BY date_message DESC";
		
		$allChats = $this->db->get('message');
		
		//var_dump($allChats->result('Chat_model'));
		//die('AllChats');

		return($allChats->result('Chat_model'));
	}



	public function loadAllUsers()
	{
		
		$sql="SELECT DISTINCT auteur,date_message FROM message ORDER BY date_message";
	
		$allUsers=$this->db->query($sql);

		return($allUsers->result('Chat_model'));
	}
}		