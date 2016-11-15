<?php
require('config.php');
require('Classes/Bootstrap.php');
require('Classes/Controller.php');
require('Controllers/home.php');
require('Controllers/shares.php');
require('Controllers/users.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}