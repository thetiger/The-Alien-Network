<?php
 // @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    4.0
// @file		accounts.class.php
 
 
if(!defined('IN_ROOT')) { die(DOMAIN); }

class accounts {
    
    public static $sql;
	public static $data;
	public static $password;
	public static $salt;
	public static $info;
	public static $createsecurehash;
	public static $hash;
	public static $activation;
	public static $ip;
	public static $saltcreate;
	public static $requestcode;
	public static $time;
	
    
	public static function register($username,$password,$email,$gender){
		
		if(db::nRows(db::query("SELECT * FROM `alien_users` WHERE `username` = '".db::mss($username)."'")) > 0){
			header('Location: index.php');
			exit();
		}
		
		self::$sql = db::query("SELECT * FROM `alien_disallow` WHERE `username` = '".db::mss($username)."'");
		
		if(db::nRows(self::$sql) > 0){
			header('Location: home');
			exit();
		}
		
		self::$sql = db::query("SELECT * FROM `alien_users` WHERE `email` = '".db::mss($email)."'");
		
		
		$username = htmlentities($username);
		$email = htmlentities($email);
		
		if(db::nRows(self::$sql) == 0){
			self::$activation = self::creatactivationhash($username,$email);
            self::$password = password_hash($password, PASSWORD_DEFAULT);
            self::$sql = db::query("INSERT INTO `alien_users` (`sex`, `username`, `password`, `email`, `status`, `activationhash`, `privelege`) 
            VALUES ('".db::mss($gender)."','".db::mss($username)."', '".db::mss(password_hash($password, PASSWORD_DEFAULT))."', '".db::mss($email)."', '0', '".db::mss(self::$activation)."','2')");
			mailer::sendactivationmail($username,$_SERVER['REMOTE_ADDR'],self::$activation,$email);
			header('Location: home');
			exit();
		}
	}
    
    public static function creatactivationhash($username,$email){
		self::$info = sha1(md5(rand(5000,10000).$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].$username.$email));
		return self::$info;
		
	}

    public static function loginuser($username,$password){

	self::$info = '';
        
        self::$sql = db::query("SELECT `password` FROM `alien_users` WHERE `username` = '".db::mss($username)."'");
        
        self::$data = db::fetch(self::$sql);
        
        self::$password = password_verify($password,self::$data['password']);
    
        
	
        if(self::$password == true){
	self::$sql = db::query("SELECT * FROM `alien_users` WHERE `username` = '".db::mss($username)."' AND `status` = '1'");
		if(db::nRows(self::$sql) == 0){
		header('Location: handler.php?handler&notactive=1');
		exit();
		}
	
		if(db::nRows(self::$sql) > 0){
			while(self::$data = db::fetch(self::$sql)){
			$_SESSION['username'] = self::$data['username'];
			$_SESSION['id'] = self::$data['id'];
			$_SESSION['hash'] = self::createsecurehash(self::$data['username']);
			if(self::$data['privelege'] == '1'){
			$_SESSION['admin'] = 'true';
			}
			db::query("UPDATE `alien_users` SET `lastlogin` = '".time()."', `loginip` = '".$_SERVER['REMOTE_ADDR']."', `hash` = '".db::mss(self::createsecurehash($_SESSION['username']))."' WHERE `username` = '".db::mss($_SESSION['username'])."'");
			events::loginuser($username);
			header('Location: home');
			
		}
	}
	elseif(db::nRows(self::$sql) == 0){
	echo 'wrong';
	}
		
	}
                           }
    
    	public static function createsecurehash($username){
		self::$sql = db::query("SELECT * FROM `alien_users` WHERE `username` = '".db::mss($username)."'");
		while(self::$data = db::fetch(self::$sql)){
		self::$info = self::$data['salt'].$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].$username;
		self::$info = sha1(md5(self::$info));
		}
		return self::$info;
	}
	
    public static function getusermessages(){
        self::$info = '';
        
        self::$sql = db::query("SELECT * FROM `alien_messages` WHERE `userto` = '".db::mss($_SESSION['id'])."'");
        
        if(db::nRows(self::$sql) > 0){
            
                self::$info .= db::nRows(self::$sql).' messages';
            
        }
        elseif(db::nRows(self::$sql) <= 0)
        {
            self::$info .= db::nRows(self::$sql).' messages';
        }
        
            return self::$info;
        
    }
    
    
	
	
}