<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Welcome <?php echo $_SESSION['Email'];?></h1>
	<h2>Your payment was successfull  Please go to your account</h2>
	<h2><a href="http://localhost/Project/Project/index.php">Go back to your Account</a></h2>
</body>
</html>