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
        
          #show
        {
            margin-left: 600px;
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
              <li><a href="gridview.php" class="waves-effect">Home</a>
                            </li>
                            <li><a href="" class="waves-effect" data-toggle="modal" data-target="#modal-contact"><span class="hidden-sm-down">Contact Form</span></a>
                            
                            </li>
                            
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Category<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="gridelec.php" class="waves-effect">Electronics</a>
                            </li>
                            <li><a href="gridfashion.php" class="waves-effect">Fashion</a>
                            </li>
                            <li><a href="gridsports.php" class="waves-effect">Sports</a>
                            </li>
                            <li><a href="gridother.php" class="waves-effect">Other</a>
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
            </li>
            
        </ul --!>
  <form name="form" id="form_search">

         
            <input type="text" id="Serach-box" value="" name="sear" placeholder="Serach Product" />
            
        </form>
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
<body>




<div class="container">
<header>
    <h1>Product Listing</h1>
     <div id="show">
        <a id="link" href="#">
            
        </a></div>
</header>
    <table class="table product-table">
        <!--Table head-->
<?php
    
   
    include("/config/database.php");
    $records = array();
     try
    {
        $con=new PDO($sn,$username);
        //echo "<td>connected</td>";
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    catch(PDOEXCEPTION $ex)
    {
        echo "Error ->".$ex->getMessage();
    }
    
            $statement=$con->prepare("select *from product");
                $statement->execute();
                $records = $statement->fetchAll(PDO::FETCH_BOTH); 
?>
</table>
    <div class="row">
<!--Card-->
    <?php foreach($records as $row){?>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <!--Carousel Wrapper-->

  <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1" data-slide-to="1"></li>
        <li data-target="#carousel-example-1" data-slide-to="2"></li>
        <li data-target="#carousel-example-1" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img src="<?php echo $row['path'];?>" style="height:200px;width:200px;" alt="First slide">
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <img src="<?php echo $row['path2'];?>" style="height:200px;width:200px;" alt="Second slide">
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <img src="<?php echo $row['path3'];?>" style="height:200px;width:200px;" alt="Third slide">
        </div>
         <div class="carousel-item">
            <img src="<?php echo $row['path4'];?>" style="height:200px;width:200px;" alt="Third slide">
        </div>
        <!--/Thi
        <!--/Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
        <!--/.Card image-->

        <!--Card content-->
                <div class="card text-xs-center">
                    <!--Category & Title-->
                    <h5><?php  echo $row['oname'];?></h5>
                    <h4 class="card-title"><strong><a href=""><?php  echo ($row["pname"]);?></a></strong></h4>

                    <!--Description-->
                    <p class="card-block card-text"><?php echo $row['description'];?></p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left"><?php echo $row['price'];?></span>

                       
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="descriptiongrid.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Description</a>
                
                    </div>
                       
                    <div>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
                          <input type="hidden" name="business" value="shababbusi12@estore.com">

                          <!-- Specify a Buy Now button. -->
                          <input type="hidden" name="cmd" value="_xclick">

                          <!-- Specify details about the item that buyers will purchase. -->
                          <input type="hidden" name="item_name" value="<?php echo $row['oname']; ?>">
                          <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
                          <input type="hidden" name="currency_code" value="USD">

                          <input type="hidden" name="return" value="http://localhost/Project/Project/success.php">
                          <input type="hidden" name="return_cancel" value="http://localhost/Project/Project/cancel.php">

                          <!-- Display the payment button. -->
                          <input type="image" name="submit" border="0"
                          src="paypal.png"
                          alt="Buy Now" height="70px" width="100px">
                          <img alt="" border="0" width="1" height="1"
                          src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
                    </div>
                
                </div>
	        
      </div>
      <?php 

      }?>
</div>
	</div>



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
            © 2015 Copyright: <a href="http://www.MDBootstrap.com"> E.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

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


$(document).ready(function(){
        $("#form_search").keyup(function(){

            var a=$(this).serialize();
            if(a!='')
            {


                $.ajax({


                    url:"searchproduct.php",
                    type:"post",
                    data:{sear:a},
                    data:a,
                    success:function(data)
                    {
                        
                        $("#show").html('<a id="id" href="index.php?name='+data['pname']+'">'+data+'</a>');
                       // $("#g").attr('href','p.php');


                    }
                    ,error:function()
                    {
                        
                    }



                });

            }
            else
            {


                $("#show").html('');

            }
        });


    });

</script>


</html>