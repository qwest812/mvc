<?php
session_start();
$baseURL =$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
include_once('Routing.php');
include_once('/helps/dataBase.php');

$r= new Routing($baseURL);
spl_autoload_register([$r,'autoload']);
$class=$r->startRouting();
//var_dump($class);
$page= new $class;