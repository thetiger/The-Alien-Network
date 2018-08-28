<?php
session_start();

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

require_once('controllers/lib.class.php');

require_once('views/head.view.php');

include_once('views/headerlogin.view.php');

include_once('views/storynav.view.php');

include_once('views/story.view.php');

include_once('views/footer.view.php');

?>