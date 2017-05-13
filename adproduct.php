<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Add Product</title>
	 <!-- External CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="uniform-css.css"> -->

    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">-->
	<link href="font/roboto/Roboto-Bold" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<style>
		#form{
			width:800px;
			position:relative;
			left:250px;
		}
		  
	p{
		color:red;
		font-size:13px;
		margin-left:10px;
	}
    
	</style>

</head>

<body>
<!--Form with header-->
<form ... onsubmit="return checkForm(this);" method="post" id="form" action="#" enctype="multipart/form-data">
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> <font color="white">Add New Product</font></h3>
        </div>

        <!--Body-->
			<div class="md-form">
			<font color="Red">*</font>&nbsp;&nbsp; <strong><font color="orange">Required Field (can't be empty)</font></strong>
		</div>
        
		
		
        <div class="md-form">
            <i class="fa fa-at prefix"></i>
            <input type="text" id="form2" class="form-control" name="pname" value="<?php if(isset($_POST['oname'])) echo $_POST['name']; ?>">
            <label for="form2">Product Name</label>
        </div>
		<div class="md-form">
				<p>	 </p>
				</div>
				<div class="md-form">
			<p>		</p>
				</div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="text" id="form4" class="form-control" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>">
            <label for="form4">Description</label>
        </div>
		
		<div class="md-form">
				<p>	
				</p>
				</div>
				<div class="md-form">
				<p>	 </p>
				</div>
				<div class="md-form">
            <i class="fa fa-at prefix"></i>
            <input type="text" id="form2" class="form-control" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>">
            <label for="form2">Product Price</label>
        </div>
		<div class="md-form">
			
		</div>
				<div class="file-field">
        <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload" >

        </div>
        <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload" >
            
        </div>
        <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload" >
            
        </div>
        <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload" >
            
        </div>
	
       <!-- <div class="file-path-wrapper">
           <input class="file-path validate" type="text" id="fileInput" name="fileUpload" placeholder="Upload your file">
        </div>-->
	<p>	 </p>
    </div>
	<div class="md-form">
        <div class="text-xs-center">
            <button class="btn btn-indigo" id="submit" name="submit">Add into List</button>
            <br />
			OR
            <hr>
			<div class="text-xs-center">
				Show existing Products! &nbsp;&nbsp;<a href="product.php" >Display Products list</a>
			</div>
        </div>

    </div>
</div>
<!--/Form with header-->


</form>

    

    <!-- /Start your project here-->


    <!-- SCRIPTS -->
	<!-- external js -->
   <!-- <script type="text/javascript" src="valid.js"></script>-->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>