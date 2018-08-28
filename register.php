<?php
require_once('includes/config.php');

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/stories.class.php');

require_once('controllers/mailer.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/settings.class.php');

$switch = 'register';

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$has_session = session_status() == PHP_SESSION_ACTIVE;

function checkthis(){
    
    $catch = '';
    
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'story/') !== false || strpos($url,'story/') !== false ) {
    return true;
} else {
    return false;
}
}

if(isset($_SESSION['username']) && isset($_SESSION['hashid'])){
header('Location: index.php');
exit();	
}

if(isset($_POST['submitreg'])){
	
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
	
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
        $errs++;
	}
        
    if(stories::getstrlen($_POST['email']) > 50){
		$errName = 'Your email must be less than 50 characters.';
        $errs++;
    }
    
    if (!$_POST['gender'] OR !$_POST['gender'] == 'm' OR !$_POST['gender'] == 'f') {
		$errGender = 'You must select a proper gender type.';
        $errs++;
	}
    
    if($errs == 0){
        accounts::register($_POST['username'],$_POST['password'],$_POST['email'],$_POST['gender']);
    }
	
}


require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/navigation.view.php');

include_once('views/register.view.php');

include_once('views/footer.view.php');