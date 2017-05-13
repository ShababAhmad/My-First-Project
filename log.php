<?php session_start();
	if(isset($_SESSION['name1']) || isset($_SESSION['pass1']))
	{
		header('Location:index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <style type="text/css">
		label
		{
			margin-left: 50px;
		}
		.row
		{
			margin-left: 380px;
		}
		body
		{
			margin-top: 20px;
		}
		h3
		{
			padding-left: 165px;
		}
	</style>
		

	</head>
<body>
		
		
		
		<form name="form" method="post" onSubmit="return validate()">
		
				
<div class="row">

            <div class="col-lg-6 col-md-8">

                <!--Form with header-->
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="form-header  purple darken-4">
                            <h3>Login</h3>
                        </div>

                        <!--Body-->
                       <div class="md-form">
                            <!--img src="identity.png" -->
                            <i class="fa fa-user"></i>
                            <input type="text" id="form2" class="form-control" name="name" maxlength="26" id="name">
                            <span id="ferror"></span> 
                            <label for="form2">Your Name</label>
                        </div>

                        <div class="md-form">
                            <!--img src="lock.png" -->
                            <i class="fa fa-lock"></i>
                            <input type="password" id="form4" class="form-control" name="pass" maxlength="15" id="pass">
                            <spand id="passwordError"></span>
                            <label for="form4" class="">Your Password</label>
                        </div>

                        <div class="text-xs-center">
                            <button class="btn btn-deep-purple" id="singlebutton" type="submit" name="login1" >Login</button>
                        </div>

    <!--Footer-->
    <div class="modal-footer">
        <div >
            <p>Not a member? <a href="signin.php">Sign Up</a></p>
            
        </div>
        <div >
            <p>Want to see products <a href="index.php">Product</a></p>
            
        </div>
    </div>

</div>
				
	
	
</body>
<!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>



    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script  src="font/font.js"></script>
<script type="text/javascript">
			var ck_name = /^[a-zA-Z ]{5,25}$/;
			
			var ck_pass = /^[a-zA-Z0-9_.]+$/;

			


			function validate(){
			var name = form.name.value;
			var pass = form.pass.value;

			 var errors = [];
			 
			 if (!ck_name.test(name)) {
			 	
			 errors[errors.length] = "You must enter a valid Name .";
			 }
			  
			
			 if (!ck_pass.test(pass)) {
			  errors[errors.length] = "You must enter a strong password.";
			 }

			 
			 
			 if (errors.length > 0) {
			  reportErrors(errors);
			  return false;
			 }
			 
			 return true;
			}

			function reportErrors(errors){
			 var msg = "Please Enter Valide Data...\n";
			 for (var i = 0; i<errors.length; i++) {
			  var numError = i + 1;
			  msg += "\n" + numError + ". " + errors[i];
			 }
			 alert(msg);
			}
			
		</script>
</html>



<?php
	
	include("/config/database.php");
	
	
	try
	{
		$con=new PDO($sn,$username);
	//	echo "<td>connected</td>";
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		



			
		if(isset($_POST['login1']))
		{
			
            	$name=$_POST['name'];
				$pass=$_POST['pass'];

           		if(empty($_POST['name']))
				{
					  echo "Enter Name";
			
					if (!preg_match("/^[a-zA-Z ]{5,25}$/", $name) )
					{
							echo "invalid name";
					}
				}
				echo "<br>";
				if(empty($_POST['pass']))
				{
					echo "Enter Pass";
					if (!preg_match("/^[a-zA-Z0-9_.]+$/", $pass) )
					{
							echo "invalid pass";
					}
				}
			
				
			$q=$con->prepare("CALL login(:name , :pass)");
					
				$q->bindParam(":name",$name);
				$q->bindParam(":pass",$pass);
				$q->setFetchMode(PDO::FETCH_ASSOC);
				$q->execute();
				$data=$q->fetch();
				
				if($data["name1"]==$name and $data["pass1"]==$pass)
				{
						$_SESSION["name1"]=$data["name1"];
						$_SESSION["pass1"]=$data["pass1"];
						header("location:adprodcategory.php");
         			
				}
				elseif ($data["name1"]!=$name and $data["pass1"]!=$pass)
				{
						echo "invalid username or password";
				}
				
				 
			}
	}
	
	catch(PDOEXCEPTION $ex)
	{
		echo "Error ->".$ex->getMessage();
	}
	/*echo "<pre>";
	print_r(get_defined_vars());
	echo "</pre>";*/
?>       