<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    4.0
// @file		lib.class.php

if(!defined('IN_ROOT')) { die(DOMAIN); }
class lib {
	
	//@$_POST
	//Global $_POST Variable
	public static function post($key, $mss = false, $strip_tags = false, $html_entities = false) {
		
		//Load Variable
		$variable = @$_POST[$key];
		
		//Do we have any data?
		if(isset($variable) && $variable != '') {
			$variable = $variable;	
		} else {
			$variable = '';	
		}
		
		//Are we protecting from SQL Injection?
		if($mss == true) {
			$variable = db::mss($variable);	
		}
		
		//Are we stripping tags?
		if($strip_tags == true) {
			$variable = strip_tags($variable);	
		}
		
		//Are we converting to HTML Entities
		if($html_entities == true) {
			$variable = htmlentities($variable, ENT_QUOTES, 'UTF-8');
		}
		
		//Return Data
		return $variable;
					
	}
	
	//@$_GET
	//Global $_GET Variable
	public static function get($key, $mss = false, $strip_tags = false, $html_entities = false) {
		
		//Load Variable
		$variable = @$_GET[$key];
		
		//Do we have any data?
		if(isset($variable) && $variable != '') {
			$variable = $variable;	
		} else {
			$variable = '';
		}
		
		//Are we protecting from SQL Injection?
		if($mss == true) {
			$variable = db::mss($variable);	
		}
		
		//Are we stripping tags?
		if($strip_tags == true) {
			$variable = strip_tags($variable);	
		}
		
		//Are we converting to HTML Entities
		if($html_entities == true) {
			$variable = htmlentities($variable, ENT_QUOTES, 'UTF-8');
		}
		
		//Return Data
		return $variable;
			
	}
	
	//Sanitize Data
	public static function san($data, $mss = false, $strip_tags = false, $html_entities = false) {
		
		//Load the data
		$variable = $data;

		//Are we protecting from SQL Injection?
		if($mss == true) {
			$variable = db::mss($variable);	
		}
		
		//Are we stripping tags?
		if($strip_tags == true) {
			$variable = strip_tags($variable);	
		}
		
		//Are we converting to HTML Entities
		if($html_entities == true) {
			$variable = htmlentities($variable, ENT_QUOTES, 'UTF-8');
		}
		
		//Return Data
		return $variable;
	}
	
		
	
}