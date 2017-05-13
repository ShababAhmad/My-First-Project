<?php session_start();
	if(isset($_SESSION['name1']) || isset($_SESSION['pass1']))
	{
		header('Location:index.php');
		
	}
?>

<?php
	
	include("/config/database.php");
	$records = array();
	
	try
	{
		
		

		if(isset($_POST['signup']))
		{
			//$id=5;
			$q=$con->prepare("CALL Signup(:name , :pass, :address, :email, :contact)");
			
			

				$name=$_POST['name'];
				$pass=$_POST['pass'];
				$address=$_POST['address'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];

				
				$q->bindParam(":name",$name);
				$q->bindParam(":pass",$pass);
				$q->bindParam(":address",$address);
				$q->bindParam(":email",$email);
				$q->bindParam(":contact",$contact);
				$q->execute();
				
				
				 
			
			if($q)
			{
				echo "<td>You Successfully signed up</td>";
					header("location:log.php");
				
				//exit(0);			
			}


			else
			{
				echo "Not inserted";
			}
				
		}
	
				
		
				
	}

	catch(PDOEXCEPTION $ex)
	{
		echo "Error ->".$ex->getMessage();
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
			margin-left: 330px;
		}
		body
		{
			margin-top: 8px;
		}
		h3
		{
			padding-left: 100px;
		}
	</style>
	
</head>
<body>
	
	<div class="container">
	
	
		<form name="form" method="post" onSubmit="return validate()">
				
	<div class="row">

            <div class="col-lg-6 col-md-8">

                <!--Form with header-->
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="form-header  purple darken-4">
                            <h3><i class="fa fa-lock"></i> Sign Up</h3>
                        </div>

                        <!--Body-->
                       <div class="md-form">
                            <img src="identity.png">
                            <input type="text" id="form2" class="form-control" name="name" maxlength="26"> 
                            <label for="form2">Name</label>
                        </div>

                        <div class="md-form">
                            <img src="lock.png">
                            <input type="password" id="form4" class="form-control" name="pass" maxlength="15">
                            <label for="form4" class="">Password</label>
                        </div>

                         <div class="md-form">
                            <img src="location.png">
                            <input type="text" id="form4" class="form-control" name="address" maxlength="50">
                            <label for="form4" class="">Address</label>
                        </div>

                         <div class="md-form">
                            <img src="post.png">
                            <input type="text" id="form4" class="form-control" name="email" maxlength="30">
                            <label for="form4" class="">Email</label>
                        </div>

                          <div class="md-form">
                            <img src="phone.png">
                            <input type="text" id="form4" class="form-control" name="contact" maxlength="14">
                            <label for="form4" class="">Contact</label>
                        </div>

				
			

			<div class="row1">
				<div class="col-sm-12">
				<!-- Button -->
					<div class="form-group">
					  <div class="col-md-12">
					    <button class="btn btn-deep-purple" id="singlebutton" type="submit" name="signup" >Sign up</button><br/>
					    <p class="message" >Already registered? <a href="log.php">Sign in</a></p>

					  </div>
					</div>
				</div>
			</div>
			
		</form>
	</div>
</body>
	
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="font/font.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
		
			var ck_name = /^[a-zA-Z ]{5,25}$/;
			var ck_pass = /^[a-zA-Z0-9_.]+$/;
			var ck_address = /^[A-Za-z0-9]{1,30}$/;
			var ck_email = /^[a-zA-Z0-9_.]+@[a-z]{3,5}.[a-z]{2,3}$/;

			var ck_contact =  /^[0-9]{1,14}$/;


			function validate(){
			var name = form.name.value;
			var pass = form.pass.value;
			 var address = form.address.value;
			 var email = form.email.value;
			 var contact = form.contact.value;
			 
			  
			  
			 var errors = [];
			 
			 if (!ck_name.test(name)) {
			  errors[errors.length] = "You must enter a valid Name .";
			 }
			  
			 if (!ck_pass.test(pass)) {
			  errors[errors.length] = "You must enter a Strong pass.";
			 }
			 if (!ck_address.test(address)) {
			  errors[errors.length] = "You must enter a valid address .";
			 }

			 if (!ck_email.test(email)) {
			  errors[errors.length] = "You must enter a valid email.";
			 }

			  if (!ck_contact.test(contact)) {
			  errors[errors.length] = "You must enter a valid contact.";
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

