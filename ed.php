<?php
	error_reporting(0);
	if (!isset($_GET['id']))
	{
		header("location:index.php?error=1");
	}
	$id=$_GET['id'];
	include("/config/database.php");
	$st=$con->prepare("select *from product where id = $id");
	$st->bindParam("id",$id);
	$result = $st->execute();
	$st->execute();
	$record=$st->fetch(PDO::FETCH_ASSOC);

	if (isset($_REQUEST['update']))
	{
		echo "hello";
		$id=$_POST['id'];
		$name = $_POST['name'];
		$pname = $_POST['pname1'];
		$price = $_POST['price1'];
		$desc = $_POST['desc'];
		$st = $con->prepare("update product set  oname = :name , pname = :pname1, price = :price1, description  = :desc where id = :id");

		$st->bindParam(":name",$name);
		$st->bindParam(":pname1",$pname);
		$st->bindParam(":price1",$price);
		$st->bindParam(":description",$desc);
		$st->bindParam(":id",$id);
		$st->execute();
echo "success";
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
<div>
	<tr>
	<td>
		 <input type="hidden" value="<?php echo $id ;?>" name="id"/>
	</td>
</tr>
</div>
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
  <input id="textinput" name="pname1" value="<?php echo $record['pname'] ?>" type="cnic" placeholder="" class="form-control input-md">
  
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
  <input id="textinput" name="price1" value="<?php echo $record['price'] ?>" type="address" placeholder="Enter address" class="form-control input-md">
  
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
  <input id="textinput" name="desc" value="<?php echo $record['description'] ?>" type="text" placeholder="Enter email" class="form-control input-md">
  
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