<?php

<<<<<<< HEAD
defined('BASEPATH') OR exit('No direct script access allowed');
=======
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

class MY_Controller extends CI_Controller
{
	
	public function render($page,$data=[])		// pour inclure le header, le footer
	{
<<<<<<< HEAD
		$this->load->view('globals/header');
		$this->load->view($page,$data);
		$this->load->view('globals/footer');
=======

		$this->load->view('globals/header');
		$this->load->view($page,$data);
		$this->load->view('globals/footer');
		
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
	}
}