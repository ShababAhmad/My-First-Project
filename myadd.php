
<?php
     
    include("/config/database.php");
    $records = array();
    

            error_reporting(0);
    if (!isset($_GET['userId']))
    {
       header("location:index.php?error=1");
    }
    $id=$_GET['userId'];
   
    $st=$con->prepare("select *from product where product.userId = $id");
    $st->bindParam("product.userId",$id);
    
   
    $result=$st->execute();
     $st->execute();
     $records = $st->fetchAll(PDO::FETCH_BOTH); 
?>
<!DOCTYPE html>
<html>
<head>
 
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">


        

    

    
    <style type="text/css">
    	h1
    	{
    		text-align: center;
            text-decoration: underline;
            background-color: #CCCCFF;
    	}
      #hdr
        {
            margin-top: -25px;
        }
        #link_login
        {
            
            font-size: 2em;
        }
        #p1
        {
            
            font-size: 25px;
        }
        .img-fluid{
            height: 5em;
            width: 7em;
        }
    </style>
</head>

<body class="hidden-sn blue-skin">

<!--Double navigation-->
<header id="hdr">

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">

               <p> E-Store</p> 
            </div>
        </li>
        <!--/. Logo -->

        <!--Social-->
        <li>
            <ul class="social">
               
            </ul>
        </li>
        <!--/Social-->

        <!--Search Form-->
     
        <!--/.Search Form-->

        <!-- Side navigation links -->
        <li>
             <ul class="collapsible collapsible-accordion">
              <li><a href="index.php" class="waves-effect">Home</a>
                            </li>
                <li><a href="" class="waves-effect" data-toggle="modal" data-target="#modal-contact"><span class="hidden-sm-down">Contact Form</span></a>
                            
                            </li>
                        
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Category<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="electronics.php" class="waves-effect">Electronics</a>
                            </li>
                            <li><a href="fashion.php" class="waves-effect">Fashion</a>
                            </li>
                            <li><a href="sports.php" class="waves-effect">Sports</a>
                            </li>
                            <li><a href="others.php" class="waves-effect">Other</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    </ul>

     <li>
   

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="pull-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            
        </div>

        <ul class="nav navbar-nav pull-right">

            <li class="nav-item " !-->
                <a href="log.php" class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Login</span></a>


                
                </button>

            </li>
            
        </ul --!>

    </nav>
    <!--/.Navbar-->

</header>
<!--/Double navigation-->

<!--Main layout-->
<main style="margin-top: -25px;">
    <div class="container-fluid">

        

    </div>
</main>
<!--/Main layout-->
<header id="a1" >
    
    <?php
       session_start();
     
    if(isset($_SESSION['name1']) ==true)
    {   
    ?> 
<form method="post" action="index.php">

    <button id="singlebutton" name="logout" class="btn btn-primary">Logout</button>
  
    <?php
    
         if(isset($_REQUEST["logout"]))
        {   
            echo "hello";
            //session_unset();
            session_destroy();
            header("location:log.php");
        }
    ?>
   
</form>
<?php
    }

     ?> 
  
</header>


<!--Shopping Cart table-->
<div class="table-responsive">
<header>
	<h1>Product Listing</h1>
</header>
    <table class="table product-table">
        <!--Table head-->
<?php
    
  

   
    

?>
        <thead>
            <tr>
                 <th>Image</th>
                <th>Product</th>
                <th>Owner</th>
                
                <th>Price</th>
                
                <th>Description</th>
               
            </tr>
        </thead>
        <!--/Table head-->

        <!--Table body-->
        <tbody>
        <?php foreach ($records as $record) {
            
        ?>
            <!--First row-->
            <tr>
                <td>


                    <img src="<?php echo $record['path']; ?>" class="img-fluid" alt="Responsive image">


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
                <td>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </td>


            </tr>
            <!--/First row-->
            <!--Second row-->
          
        <?php 
            }
        ?>
            <!--/Third row-->

            <!--Fourth row-->
            <tr>
                <td colspan="10"></td>
               
                
            </tr>
            <!--/Fourth row-->

        </tbody>
        <!--/Table body-->
    </table>
   
</div>
<!--/Shopping Cart table-->


                                
<!-- Modal Contact -->
<div class="modal fade modal-ext" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Write to us</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <p>We like to receive a messages.</p>
                <br>
                <div class="md-form">
                    <i class="fa fa-user prefix"></i>
                    <input type="text" id="form22" class="form-control">
                    <label for="form42">Your name</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form32" class="form-control">
                    <label for="form34">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="form32" class="form-control">
                    <label for="form34">Subject</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea"></textarea>
                    <label for="form8">Icon Prefix</label>
                </div>

                <div class="text-xs-center">
                    <button class="btn btn-primary">Submit</button>

                    <div class="call">
                        <p>Or would you prefer to call? <span class="cf-phone"><i class="fa fa-phone"> +01 234 565 280</i></span></p>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
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
    
    
// SideNav init
$(".button-collapse").sideNav();

// Custom scrollbar init
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);


//modal
$('#myModal').modal(options)
$('#myModal').modal({
  keyboard: false
})

$('#myModal').modal('toggle')
$('#myModal').modal('show')
$('#myModal').modal('hide')
$('#myModal').on('hidden.bs.modal', function (e) {
  // do something...
})
</script>


<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
       

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

</html>