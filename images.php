
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
        background-color: #E5E5FF;
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




<legend >ADD Product</legend>


<form action="#" method="post" enctype="multipart/form-data" >
  <fieldset>                   

     <div class="row">
         <div class="col-md-3">
               <!-- Text input-->
          <div class="form-group">
               <div class="col-md-4">
                  <input type="file" name="fileUpload1"  id="fl">
               </div>
            </div>
          </div>
           <div class="col-md-3">
               <!-- Text input-->
          <div class="form-group">
               <div class="col-md-4">
                  <input type="file" name="fileUpload2"  id="fl">
               </div>
            </div>
          </div>
           <div class="col-md-3">
               <!-- Text input-->
          <div class="form-group">
               <div class="col-md-4">
                  <input type="file" name="fileUpload3"  id="fl">
               </div>
            </div>
          </div>

           <div class="col-md-3">
               <!-- Text input-->
          <div class="form-group">
               <div class="col-md-4">
                  <input type="file" name="fileUpload4"  id="fl">
               </div>
            </div>
          </div>
     </div>
  
  

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-8">
      <button id="singlebutton" name="ad" class="btn btn-primary">Submit</button>
       <button id="singlebutton" name="logout" class="btn btn-primary">Logout</button>
       
    </div>
    
  </div>

  </fieldset>
</form>

  <footer>

</footer>
</body>
 <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="font/font.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</html>

<?php
  
  
  include("/config/database.php");
  $records = array();
  
  try
  {
    $con=new PDO($sn,$username);
    //echo "<td>connected</td>";
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    

    if(isset($_POST['ad']))
    {
      if($_FILES['fileUpload1']['size'] > 100000){
        header("location:index.php?error=invalidFileSize");
        exit(0);
    }
     if($_FILES['fileUpload1']['type'] == "image/png" || $_FILES['fileUpload1']['type'] == "image/jpg" || $_FILES['fileUpload1']['type'] == "image/jpeg" ){


        $date = "14021451025";
      $time=time();
      echo $time;
      move_uploaded_file($_FILES['fileUpload1']['tmp_name'],"Uploads/".$time.".jpg");
      move_uploaded_file($_FILES['fileUpload2']['tmp_name'],"Uploads/".$time.".jpg");
      move_uploaded_file($_FILES['fileUpload3']['tmp_name'],"Uploads/".$time.".jpg");
      move_uploaded_file($_FILES['fileUpload4']['tmp_name'],"Uploads/".$time.".jpg");
      //$id=5;
     
    
      $q1=$con->prepare("insert into image(path1,path2,path3,path4) values(:path1 ,:path2 ,:path3 ,:path4)");
        
         $source1="uploads/".$time.".jpg";
          $source2="uploads/".$time.".jpg";
           $source3="uploads/".$time.".jpg";
            $source4="uploads/".$time.".jpg";
       
        
       
    
      
        $q1->bindParam(":path1",$source1);
        $q1->bindParam(":path2",$source2);
        $q1->bindParam(":path3",$source3);
        $q1->bindParam(":path4",$source4);
       

       
        $q1->execute();
        
     
         
      
      if($q)
      {

        echo "<td>Data inserted</td>";
      header("location:index.php");
        
      }
    
      else
      {
        echo "Not inserted";
      }
      
    }
    
  }
        

        
  }

  catch(PDOEXCEPTION $ex)
  {
    echo "Error ->".$ex->getMessage();
  }
  

?>