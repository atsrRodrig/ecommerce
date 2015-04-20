<?php

<<<<<<< HEAD
defined('BASEPATH') OR exit('No direct script access allowed');
=======

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

// ------------------------------------------------------------------------

	/**
	 * Set cookie
	 *
	 * Accepts seven parameters, or you can submit an associative
	 * array in the first parameter containing all the values.
	 *
	 * @param	mixed
	 * @param	string	the value of the cookie
	 * @param	string	the number of seconds until expiration
	 * @param	string	the cookie domain.  Usually:  .yourdomain.com
	 * @param	string	the cookie path
	 * @param	string	the cookie prefix
	 * @param	bool	true makes the cookie secure
	 * @param	bool	true makes the cookie accessible via http(s) only (no javascript)
	 * @return	void
	 */



	function set_cookie($name, $value = '', $expire = '', $domain = '', $path = '/', $prefix = '', $secure = FALSE, $httponly = FALSE)
	{
	
		//die('Je suis dans le helper cookie perso');
<<<<<<< HEAD
		//Set the config file options
		
			
		if(empty($expire))
		{
			$expire=time()+172800;
=======
		// Set the config file options
		
		if(empty($expire))
		{
			$expire =time()+172800;
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
		}	

		if(!is_string($value))
		{
			$value=serialize($value);
<<<<<<< HEAD
		}

		// Set the config file options
		get_instance()->input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly);

=======
		}	
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
	}	


	/**
	 * Fetch an item from the COOKIE array
	 *
	 * @param	string
	 * @param	bool
	 * @return	mixed
	 */

<<<<<<< HEAD
=======

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
	function get_cookie($index, $xss_clean = NULL)
	{
		is_bool($xss_clean) OR $xss_clean = (config_item('global_xss_filtering') === TRUE);
		$prefix = isset($_COOKIE[$index]) ? '' : config_item('cookie_prefix');
		
		$value = get_instance()->input->cookie($prefix.$index, $xss_clean);

		return unserialize($value);
	}