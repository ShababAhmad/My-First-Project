<?php
	if(!isset($_GET['id']))
	{
		header("location:contact.php?error=1");
	}
	$id = $_GET['id'];
	include("/config/database.php");
	$statement=$con->prepare("select *from u_info where id = $id");
	$statement->bindParam(":id",$id);
	$result = $statement->execute();
	$statement->execute();
	$record=$statement->fetch(PDO::FETCH_ASSOC);

	if(isset($_REQUEST['singlebutton'])){
		var_dump($record);
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$cnic = $_REQUEST['cnic'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		var_dump($record);
		$sql = "DELETE FROM `u_info` WHERE `id` = :id";
		$query = $con->prepare( $sql );
		$query->execute( );

		header("location:contact.php?success=1");
	}
	
?>

<!doctype html>
<html>
	<head>
		 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
		
		
	</head>
	<body>
		<div class="container">
			<div class="row`">
				<div class="col-sm-12">
					<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Delete Record</legend>
<form action="delete.php" method="REQUEST" >
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="Enter Name" value="<?php echo $record['Name'] ?>" class="form-control input-md">
   
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">CNIC</label>  
  <div class="col-md-4">
  <input id="textinput" name="cnic" value="<?php echo $record['cnic'] ?>" type="cnic" placeholder="Enter cnic" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="textinput" name="address" value="<?php echo $record['Address'] ?>" type="address" placeholder="Enter address" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" value="<?php echo $record['Email'] ?>" type="email" placeholder="Enter email" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact</label>  
  <div class="col-md-4">
  <input id="textinput" name="contact" value="<?php echo $record['Contact'] ?>" type="contact" placeholder="Enter contact" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>
	</div>
</div>


</form>








</fieldset>
</form>
				</div>
			</div>
		</div>
	
	</body>
</html>