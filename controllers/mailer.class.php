<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    3.0
// @file		mailer.class.php

if(!defined('IN_ROOT')) die();

class mailer{
	
	public static $to;
	public static $subject;
	public static $message;
	public static $headers;
	public static $template;
	public static $testing;
	
	public static function sendactivationmail($username,$ip,$activationhash,$email){
			self::$to = $email;
			self::$subject = 'The Alien Network - Activation';
			self::$template = file_get_contents('system/tpl/activation.tpl.php');
			self::$testing = str_replace('<!-- USERNAME -->', $username,self::$template);
			self::$testing = str_replace('<!-- IP -->', $ip,self::$testing);
			self::$testing = str_replace('<!-- SITENAME -->', settings::getsetting('sitename'),self::$testing);
			self::$testing = str_replace('<!-- LINK -->', '<a href="http://www.thealiennetwork.co.uk/index.php?activate&accounthash='.$activationhash.'&email='.$email.'">LINK</a>',self::$testing);
			self::$testing = self::$testing;
			self::$headers  = "MIME-Version: 1.0\r\n";
			self::$headers .= "Content-type: text/html; charset: utf8\r\n";
			self::$headers .= "From: postmaster@thealiennetwork.co.uk";
			
			if(mail(self::$to, self::$subject, self::$testing, self::$headers)){
				header('Location: index.php');
				exit();
			}
			else
			{
				echo 'false';
				exit();
			}
	}
	
	public static function sendconfirmationmessage($email){
			self::$to = $email;
			self::$subject = 'The Alien Network - Activation';
			self::$template = file_get_contents('system/tpl/activationsuc.tpl.php');
			self::$testing = str_replace('<!-- SITENAME -->', settings::getsetting('sitename'),self::$template);
			self::$testing = self::$testing;
			self::$headers  = "MIME-Version: 1.0\r\n";
			self::$headers .= "Content-type: text/html; charset: utf8\r\n";
			self::$headers .= "From: postmaster@thealiennetwork.co.uk";
			
			if(mail(self::$to, self::$subject, self::$testing, self::$headers)){

			}
			else
			{
				echo 'false,please contact support.';
				exit();
			}
	}
	
	public static function changepassword($email,$changecode){
			self::$to = $email;
			self::$subject = 'The Alien Network - Change Password Request';
			self::$template = file_get_contents('system/tpl/changepassword.tpl.php');
			self::$testing = str_replace('<!-- SITENAME -->', settings::getsetting('sitename'),self::$template);
			self::$testing = str_replace('<!-- IP -->', $_SERVER['REMOTE_ADDR'],self::$template);
			self::$testing = str_replace('<!-- LINK -->', '<a href="http://www.thealiennetwork.co.uk/index.php?changepassword&email='.$email.'&requesthash='.$changecode.'">LINK</a>',self::$template);
			self::$testing = self::$testing;
			self::$headers  = "MIME-Version: 1.0\r\n";
			self::$headers .= "Content-type: text/html; charset: utf8\r\n";
			self::$headers .= "From: postmaster@thealiennetwork.co.uk";
		mail(self::$to, self::$subject, self::$testing, self::$headers);
		
	}
}
?>