<?php
// @author     Jonathon Maguire, www.coderlite.com, www.thealiennetwork.co.uk
// @coder      Jonathon Maguire, jonathonmaguire@gmail.com
// @version    4.0
// @file		index.php

session_start();

require_once('includes/config.php');

if(!defined('IN_ROOT')) { die(DOMAIN); }

require_once('controllers/config.class.php');

require_once('controllers/db.class.php');

require_once('controllers/stories.class.php');

require_once('controllers/accounts.class.php');

require_once('controllers/events.class.php');

if(!isset($_SESSION)){
    header('Location: home');
    exit();
}
else
{
    events::loggedout($_SESSION['username']);
	session_destroy();
	header('Location: home');
	exit();
}

?>