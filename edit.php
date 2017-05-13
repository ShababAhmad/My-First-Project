<?php
/*	if (!isset($_REQUEST ['oname']))
	{
		header("location:index.php?error=1");
	}*/
	$oname = $_GET['oname'];
	include("/config/database.php");
	$statement=$con->prepare("select *from product where oname = $name");
	$statement->bindParam(":oname",$name);
	$result = $statement->execute();
	$statement->execute();
	$record=$statement->fetch(PDO::FETCH_ASSOC);
	if(isset($_REQUEST['update'])){
		$name = $_REQUEST['oname'];
		$pname = $_REQUEST['pname'];
		$price = $_REQUEST['price'];
		
		$desc = $_REQUEST['description'];
		
		$statement = $con->prepare("update product set  oname = :oname , pname = :pname, price = :price, description  = :description");
		$statement->bindParam(":oname",$name);
		$statement->bindParam(":pname",$pname);
		
		$statement->bindParam(":price",$price);
		$statement->bindParam(":description",$desc);
		
		$statement->execute();
				

	header("location:index.php?success=1");
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
<legend>Update Record</legend>
<form action="ediit.php" method="POST"  onSubmit="return validate(this);" name="form">

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="Enter Name" value="<?php echo $record['oname'] ?>" class="form-control input-md">
   
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Product </label>  
  <div class="col-md-4">
  <input id="textinput" name="cnic" value="<?php echo $record['pname'] ?>" type="cnic" placeholder="" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Price</label>  
  <div class="col-md-4">
  <input id="textinput" name="address" value="<?php echo $record['price'] ?>" type="address" placeholder="Enter address" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Description</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" value="<?php echo $record['description'] ?>" type="email" placeholder="Enter email" class="form-control input-md">
  
  </div>
</div>
	</div>
</div>



<div class="row">
	<div class="col-sm-12">
	<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button id="singlebutton" type="submit" name="update" class="btn btn-primary">Update</button>
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