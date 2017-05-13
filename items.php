<?php

session_start();
$pageTitle = 'Products';

$records=array();
if(isset($_SESSION['Username'])){
//  echo 'Welcome '.$_SESSION['Username'];
}

  include 'init.php';


    $query =$db->prepare("SELECT *FROM product");
      // $query =$db->prepare("SELECT * FROM user WHERE GROUPID != 1");

  $query->execute();

  $records = $query->fetchAll();
  ?>
  <!DOCTYPE html>
  <html>
  <head></head>
  <body>
  <h1 class="text-center">Manage Products</h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table text-center table-bordered">
        
        <tr>
          <td>#ID</td>
          <td>Product Name</td>
          <td>Owner Name</td>
        
          <td>Price</td>
          <td>Description</td>
        </tr>
       
        <?php
            foreach ($records as $record) {
            
        ?>
                  <tr>

                       
                 <td>
                    
               
<!--/.Carousel Wrapper--><?php echo $record['id']; ?>
                  


                </td>
                <td>
                    <h5><strong><?php echo $record['pname']; ?></strong></h5>
                    <p class="text-muted"> </p>
                </td>
                
                <td><?php echo $record['oname']; ?></td>
                <td>
                   <?php echo $record['price']; ?>
                </td>
                <td><?php echo $record['description']; ?></td>
                
                    

               
                
                     
                          </tr>


                         
           <?php 
            }
        ?>
</table>


</body>
</html>
