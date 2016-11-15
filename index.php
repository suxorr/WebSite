<?php
require('config.php');
require('Classes/Bootstrap.php');
require('Classes/Controller.php');
require('Classes/Model.php');

require('Controllers/home.php');
require('Controllers/shares.php');
require('Controllers/users.php');

require('Models/home.php');
require('Models/share.php');
require('Models/user.php');




$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}