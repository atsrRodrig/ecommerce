<?php

defined('BASEPATH') OR exit('No direct script access allowed');


function form_create($action,$inputs=[])
	{

		$formulaire = form_open($action);

		foreach($inputs	as $key =>$value)
		{

			switch($value)
			{
				case "text":
					$formulaire .= "<div class='form-gorup'>";
					$data = [
							"class"=>"form-control",
							"name"=>$key,
							"placeholder"=>$key,
							"value"=>set_value($key)];
					$formulaire .= form_input($data);
					$formulaire .= form_error($key,'<div class="alert alert-danger">','</div>');
					$formulaire .= "</div>";
					
					break;

				case "textarea":
					$formulaire .= "<div class='form-gorup'>";
					$data = [
							"class"=>"form-control",
							"name"=>$key,
							"placeholder"=>$key,
							"value"=>set_value($key)];
					$formulaire .= form_textarea($data);
					$formulaire .= form_error($key,'<div class="alert alert-danger">','</div>');
					$formulaire .= "</div>";
					
					break;

				case "submit":
					$formulaire .= form_submit($key,$key,"class='btn btn-primary'");
					
					break;



				default:
					# code...
					break;		
			}


			/*
			if($value == "test")
			{
				$formulaire .= form_input($key);
			}
			elseif ($value=="textarea")
			{
				$formulaire .= form_textarea($key);
			}
			*/	
		}

		$formulaire .=form_close();
		return $formulaire;	
	}