<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    3.0
// @file		events.class.php

if(!defined('IN_ROOT')) die();

class events
{

	public static function loginuser($username){
		db::query("INSERT INTO `alien_events` (`eventname`, `username`, `time`) VALUES ('Logged-in', '".db::mss($username)."', '".time()."')");
	}
	
	public static function addedstory($username){
		db::query("INSERT INTO `alien_events` (`eventname`, `username`, `time`) VALUES ('Added a Story', '".db::mss($username)."', '".time()."')");
	}
	
	public static function loggedout($username){
		db::query("INSERT INTO `alien_events` (`eventname`, `username`, `time`) VALUES ('Logged-out', '".db::mss($username)."', '".time()."')");
	}
	
	public static function postreply($username){
		db::query("INSERT INTO `alien_events` (`eventname`, `username`, `time`) VALUES ('Posted a reply', '".db::mss($username)."', '".time()."')");
	}
	
	public static function createdtopic($username){
		db::query("INSERT INTO `alien_events` (`eventname`, `username`, `time`) VALUES ('Created a topic', '".db::mss($username)."', '".time()."')");
	}
	
	public static function updatelastactivity(){
		if(isset($_SESSION['hash']) && isset($_SESSION['username'])){
			db::query("UPDATE `alien_users` SET `lastactivity` = '".db::mss(time())."' WHERE `username` = '".db::mss($_SESSION['username'])."'");
		}
	}
	
	
	
}




?>