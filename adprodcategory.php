<?php
    session_start();
    
if(isset($_SESSION['name1'])  == false){
  header("location:log.php?error=1");
}


   
    if(isset($_POST["logout"]))
    {
        session_unset();
        session_destroy();
        header("location:log.php");
    }


  include("/config/database.php");
  $records = array();
  
  try
  {
   // $con=new PDO($sn,$username);
    //echo "<td>connected</td>";
   // $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    
     




    if(isset($_POST['ad']))
    {
      
      //$id=5;
      var_dump($_FILES['fileUpload1']['name']);
      var_dump($_FILES['fileUpload2']['name']);
      var_dump($_FILES['fileUpload3']['name']);
      var_dump($_FILES['fileUpload4']['name']);
      
     
  

        $date = "14021451025";
      $time=time();
      $time2=time();
      $time3=time();
      $time4=time();

      echo $time;
      move_uploaded_file($_FILES['fileUpload1']['tmp_name'],"Uploads/".$time."1.jpg");
      move_uploaded_file($_FILES['fileUpload2']['tmp_name'],"Uploads/".$time."2.jpg");
      move_uploaded_file($_FILES['fileUpload3']['tmp_name'],"Uploads/".$time."3.jpg");
      move_uploaded_file($_FILES['fileUpload4']['tmp_name'],"Uploads/".$time."4.jpg");
     
    

      $q=$con->prepare("insert into product(oname,pname,price,description,path,path2,path3,path4,category) values(:oname , :name, :price, :description, :path,:path2 ,:path3 ,:path4,:category)");
        
         $source="Uploads/".$time."1.jpg";
         $source2="Uploads/".$time."2.jpg";
         $source3="Uploads/".$time."3.jpg";
         $source4="Uploads/".$time."4.jpg";
        $oname=$_POST['oname'];
        $pname=$_POST['name'];
        $price=$_POST['price'];
        $desc=$_POST['description'];
        $category=$_POST['category'];
        
       
    
        $q->bindParam(":oname",$oname);
        $q->bindParam(":name",$pname);
        $q->bindParam(":price",$price);
        $q->bindParam(":description",$desc);
        $q->bindParam(":category",$category);
        $q->bindParam(":path",$source);
        
        $q->bindParam(":path2",$source2);
        $q->bindParam(":path3",$source3);
        $q->bindParam(":path4",$source4);

       
        $q->execute();
        
     
          session_unset();
           session_destroy();
      header("location:index.php?successfullyAdded");
      if($q)
      {
        
          
        
        echo "<td>Data inserted</td>";
    // header("location:index.php?successfullyAdded");
        
        
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
      	.col-md-4
        {
          margin-left: 50px;
        }
        .row
        {
          margin-left: 250px;
        }
    
       legend
       {
       text-align: center;
       text-decoration: underline;
        margin-bottom: 30px;

       } 
       body
       {
        margin-top: 30px;
       }
       .col-md-8
       {
        margin-left: 550px;
       }
       #name
       {
        width: 400px;
       }
       footer
       {
        margin-left: 570px;
        margin-top: 50px;
       }
    </style>
	
</head>
<body>






<form action="#" method="post" enctype="multipart/form-data" >
  <fieldset>                   
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
            <i class="fa fa-user"></i>
            <input type="text" id="form2" class="form-control" name="oname" value="<?php echo $_SESSION['name1']; ?>">
            <label for="form2">Owner Name</label>
        </div>
    
        <div class="md-form">
            <i class="fa fa-user"></i>
            <input type="text" id="form2" class="form-control" name="name" value="">
            <label for="form2">Product Name</label>
        </div>
        <div class="md-form">
        <label>Category</label>
        <!--Blue select-->
        <select class="mdb-select colorful-select dropdown-primary" name="category">
            <option value="sports">Sports</option>
            <option value="electronics">Electronics</option>
            <option value="fashion">Fashion</option>
            <option value="other">Other</option>
        </select>
        </div>
        <div class="md-form">
            <i class="fa fa-pencil"></i>
            <input type="text" id="form4" class="form-control" name="description" value="">
            <label for="form4">Description</label>
        </div>
    
    <div class="md-form">
        <p> <?php
             if(isset($errors['description1'])) echo $errors['description1'];
          ?>
        </p>
        </div>
        <div class="md-form">
        <p> <?php
            if(isset($errors['description2'])) echo $errors['description2'];//for output the error 
          ?> </p>
        </div>
     
        <div class="md-form">
            <i class="fa fa-dollar" ></i>
            <input type="text" id="form2" class="form-control" name="price" value="">
            <label for="form2">Product Price</label>
        </div>
    <div class="md-form">
        <p> <?php
              if(isset($errors['price1'])) echo $errors['price1'];
          ?></p>
        </div>
        <div class="md-form">
        <p> <?php
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
  <p> <?php
       if(isset($errors['upload'])) echo $errors['upload'] ;
    ?> </p>
    </div>
  <div class="md-form">
        <div class="text-xs-center">
            <button class="btn btn-indigo" id="submit" name="ad">Add into List</button>
            <br />
            </form>
      OR
            <hr>
      <div class="text-xs-center">
        Show existing Products! &nbsp;&nbsp;<a href="index.php" >Display Products list</a>
      </div>
      <div class="text-xs-center">
       <button id="singlebutton" name="logout" class="btn btn-primary">Logout</button>
      </div>
        </div>

    </div>
</div>
<!--/Form with header-->
  

  
  </fieldset>


  <footer>
 
</footer>
</body>
 <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
 <script>
     //Material Select Initialization
    $(document).ready(function() {
    $('.mdb-select').material_select();
    });
</script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="font/font.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</html>

<?php
  

  

?>