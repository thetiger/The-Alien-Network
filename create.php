<?php
session_start();

if(!isset($_SESSION)){
    header('Location: index.php');
    exit();
}

$switch = 'create';

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$has_session = session_status() == PHP_SESSION_ACTIVE;

function checkthis(){
    
    $catch = '';
    
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'story/') !== false) {
    return true;
} else {
    return false;
}
}


require_once('includes/config.php');

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/stories.class.php');

require_once('controllers/events.class.php');


if(isset($_POST['createtopic'])){
    $errs = 0;
    
    if (!$_POST['topicname']) {
		$errTitle = 'Please enter a title';
        $errs++;
	}
    if (!$_POST['storycontent']) {
		$errStorycontent = 'Please enter a story description';
        $errs++;
	}
    
    if (!$_POST['cat']) {
		$errCat = 'Please choose a category';
        $errs++;
	}
    
    if (!$_POST['youtubevid']) {
		$errVideo = 'Please enter a youtube video id';
        $errs++;
	}
    if($errs == 0){
		stories::addstory($_POST['topicname'],$_POST['storycontent'],$_POST['cat'],'1',$_POST['youtubevid']);
    }
}

require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/navigation.view.php');

include_once('views/create.view.php');

include_once('views/footer.view.php');

?>