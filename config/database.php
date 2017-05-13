<?php 
	$servername="localhost";
	$username="root";
	$db="login&sign";
	
	$sn="mysql:host=$servername;dbname=$db";
	$con = null;
	try{
		$con=new PDO($sn,$username);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	}catch(PDOException $e){
		echo "Exception: "+$e->getMessage();
	}

?>