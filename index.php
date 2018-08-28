<?php
session_start();

require_once('includes/config.php');

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/stories.class.php');

require_once('controllers/events.class.php');


function checkthis(){
    
    $catch = '';
    
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'story/') !== false || strpos($url,'story/') !== false ) {
    return true;
} else {
    return false;
}
}

if(isset($_POST['login'])){
	
    $errs = 0;
    
	if (!$_POST['username']) {
		$errName = 'Please enter a username';
        $errs++;
	}
        
	if(stories::getstrlen($_POST['username']) > 15){
		$errName = 'Your username must be less than 15 characters.';
        $errs++;
    }
        
	if (!$_POST['password']) {
		$errPass = 'Please enter a password.';
        $errs++;
	}
        
    if(stories::getstrlen($_POST['password']) > 25){
		$errName = 'Your password must be less than 25 characters.';
        $errs++;
    }
    
    if($errs == 0){
        accounts::loginuser($_POST['username'],$_POST['password']);
    }
	
}

require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/navigation.view.php');

include_once('views/maincontent.view.php');

include_once('views/footer.view.php');

?>