<?php
	$server="localhost";
	$db="login&sign";
	$user="root";
	$pass="";
	$dsn="mysql:host=$server;dbname=$db";
try {
    $db= new PDO($dsn,$user,$pass);
//    echo "Connected";
} catch (Exception $e) {
  echo "not connected";
}

 //$db= new PDO('mysql:host=localhost; dbname=shop', 'root', '');
