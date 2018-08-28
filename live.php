<?php
session_start();

function checkthis(){
    
    $catch = '';
    
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'story/') !== false || strpos($url,'story/') !== false ) {
    return true;
} else {
    return false;
}
}

$switch = 'live';

require_once('includes/config.php');

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/stories.class.php');

require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/navigation.view.php');

include_once('views/live.view.php');

include_once('views/footer.view.php');

?>