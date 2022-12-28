<?php
require "Core/Database.php";
require "Models/BaseModel.php";
require "Controllers/BaseController.php";


//$controler=isset($_GET['controler'])? $_GET['controler'].'Controller':'UserController';
//$action= isset($_GET['action'])? $_GET['action']:'getUser';
//require_once ("Controllers/UserController.php");
//$usercontroler= new $controler();
//$usercontroler->getUser();
//

$controller = $_REQUEST['Controller'] ?? 'login';
$controllerName = ucfirst((strtolower($controller) .'Controller')) ;
$actionName = strtolower($_REQUEST['action'] ?? 'index' );
require "Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject -> $actionName();