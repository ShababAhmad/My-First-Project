 <?php
 session_start();

if(isset($_SESSION['name1'])  == false){
  header("location:log.php?error=1");
}
 /* if($_SESSION['name']=="" and $_SESSION['email']=="" and $_SESSION['pass']=="" and $_SESSION['id']=="")
    {
        session_unset();
        session_destroy();
        header("location:login.php?error:notLoggedIn");
        exit(0);
    }*/
  include("/config/database.php");
  $records = array();
 try
  {
    $con=new PDO($sn,$username);
    //echo "<td>connected</td>";
	    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		if($_POST)
		{
			/* $validator->addfield('firstName');
			$validator->add_rule_to_field('firstName',array('min_length',2));
			$validator->add_rule_to_field('firstName',array('empty')); */
			//not empty
				//at least 4 charachter long
			$errors=array();
			//start Validation
			

			if(empty($_POST['name']))
			{
				$errors['name1']="*";
			}
			if(strlen($_POST['name'])<3)
			{
				$errors['name2']="your Product name should be greater than 3";
			}

			if(empty($_POST['description']))
			{
				$errors['description1']="*";
			}
			if(strlen($_POST['description'])<12)
			{
				$errors['description2']="your description should me 12 charachters long";
			}
			if(empty($_POST['price']))
			{
				$errors['price1']="*";
			}
			if(empty($_FILES['fileUpload']))
			{
				$errors['upload']="*";
			}
			if($_FILES['fileUpload1']['size'] > 150000 )
			{
				 $errors['upload'] = "*only 150kb file allowed";
			}
			  if($_FILES['fileUpload1']['type'] == "image/png" || $_FILES['fileUpload1']['type'] == "image/jpg" || $_FILES['fileUpload1']['type'] == "image/jpeg")
			{
				  
		      $date = "14021451025";
		      $time=time();
		      echo $time;
		      move_uploaded_file($_FILES['fileUpload1']['tmp_name'],"Uploads/".$time.".jpg");
		      move_uploaded_file($_FILES['fileUpload2']['tmp_name'],"Uploads/".$time.".jpg");
		      move_uploaded_file($_FILES['fileUpload3']['tmp_name'],"Uploads/".$time.".jpg");
		      move_uploaded_file($_FILES['fileUpload4']['tmp_name'],"Uploads/".$time.".jpg");
			}
			else
			{
				 $errors['upload'] = "*Only JPG and PNG Images are allowed";
			}
		}

		
	if(isset($_POST["submit"]))
	{
		//connect databasee

	
		$records=array();
		
			
			//chek error
		if(count($errors)==0)
		{
			
							
			$q=$con->prepare("insert into product(oname,pname,price,description,path,path2,path3,path4) values(:oname , :name, :price, :description, :path,:path2 ,:path3 ,:path4)");
	        
	        $source="uploads/".$time.".jpg";
	        $source2="uploads/".$time.".jpg";
	        $source3="uploads/".$time.".jpg";
	        $source4="uploads/".$time.".jpg";
	        $oname=$_SESSION["name1"];
	        $pname=$_POST['name'];
	        $price=$_POST['price'];
	        $desc=$_POST['description'];
	        
	       
	    
	        $q->bindParam(":oname",$oname);
	        $q->bindParam(":name",$pname);
	        $q->bindParam(":price",$price);
	        $q->bindParam(":description",$desc);
	        $q->bindParam(":path",$source);
	        
	        $q->bindParam(":path2",$source2);
	        $q->bindParam(":path3",$source3);
	        $q->bindParam(":path4",$source4);
			$q->execute();
			
			  
				
			header("location:index.php?inserted=1"); //after login go on product page to add and view products
		}
		if(isset($_GET["inserted"]))
		{
			echo'<script>alert("data inserted")</script>';

		}
	}

}


	


 catch(PDOEXCEPTION $ex)
  {
    echo "Error ->".$ex->getMessage();
  }
?>

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
            <input type="text" id="form2" class="form-control" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
            <label for="form2">Product Name</label>
        </div>
		<div class="md-form">
				<p>	<?php
						if(isset($errors['name1'])) echo $errors['name1'];
					?> </p>
				</div>
				<div class="md-form">
			<p>		<?php
						if(isset($errors['name2'])) echo $errors['name2']; //for output the error
					?> </p>
				</div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="text" id="form4" class="form-control" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>">
            <label for="form4">Description</label>
        </div>
		
		<div class="md-form">
				<p>	<?php
						 if(isset($errors['description1'])) echo $errors['description1'];
					?>
				</p>
				</div>
				<div class="md-form">
				<p>	<?php
						if(isset($errors['description2'])) echo $errors['description2'];//for output the error 
					?> </p>
				</div>
				<div class="md-form">
            <i class="fa fa-at prefix"></i>
            <input type="text" id="form2" class="form-control" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>">
            <label for="form2">Product Price</label>
        </div>
		<div class="md-form">
				<p>	<?php
							if(isset($errors['price1'])) echo $errors['price1'];
					?></p>
				</div>
				<div class="md-form">
				<p>	<?php
						if(isset($errors['price2'])) echo $errors['price2']; //for output the error
					?></p>
				</div>
				<div class="file-field">
        <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload1" >
        </div>
         <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload2" >
        </div>
         <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload3" >
        </div>
         <div class="btn btn-primary">
            <span>Choose file</span>
            <input type="file" id="fileInput" name="fileUpload4" >
        </div>
		
       <!-- <div class="file-path-wrapper">
           <input class="file-path validate" type="text" id="fileInput" name="fileUpload" placeholder="Upload your file">
        </div>-->
	<p>	<?php
			 if(isset($errors['upload'])) echo $errors['upload'] ;
		?> </p>
    </div>

	<div class="md-form">
        <div class="text-xs-center">
            <button class="btn btn-indigo" id="submit" name="submit">Add into List</button>
            <br />
			OR
            <hr>
			<div class="text-xs-center">
				Show existing Products! &nbsp;&nbsp;<a href="index.php" >Display Products list</a>
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