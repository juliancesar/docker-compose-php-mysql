<?php
@header("Access-Control-Allow-Origin: *");
@header("Access-Control-Allow-Methods: *");
@header("Access-Control-Allow-Headers: *"); 
  
$enviroment = require_once("enviroment.php");
$config = (file_exists("{$enviroment->path}{$enviroment->mode}.php")) ? "{$enviroment->path}{$enviroment->mode}.php" : "{$enviroment->path}main.php";
require_once($enviroment->framework);
$app = Yii::createWebApplication($config);

if($app->params['maintenance'] == true)
{
    header('Location: /maintenance.php');
}
else
{
    $app->run();
}