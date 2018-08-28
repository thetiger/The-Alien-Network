<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    3.0
// @file		settings.class.php

if(!defined('IN_ROOT')) die();

class settings{
	
	public static $sql;
	public static $data;
	public static $info;
	public static $check;
	public static $id;
	public static $uniqueid;
	public static $link;

	public static function getsetting($field){
		self::$sql = db::query("SELECT ".db::mss($field)." FROM `alien_settings`");
			if(db::nRows(self::$sql) > 0){
				
			self::$info = '';
			
				while(self::$data = db::fetch(self::$sql)){
					self::$info = self::$data[$field];
					
					
				}
			
			
			}
			return self::$info;
	
	
	
	}


}


?>