<?php

// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    4.0
// @file		live.php

session_start();

$switch = 'about';

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

if(!defined('IN_ROOT')) { die(DOMAIN); }

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/stories.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/events.class.php');

require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/navigation.view.php');

include_once('views/about.view.php');

include_once('views/footer.view.php');
