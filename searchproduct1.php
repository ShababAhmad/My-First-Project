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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <style type="text/css">
      #Serach-box
      {

        height: 120px;
        width: 400px;
        margin-left: 30px;
      }
      h2
      {

        font-size: 2em;
        text-align: center;
        text-decoration: underline;
      }
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
#label1
{
    width: 100px;
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
                    <li><a href="searchproduct1.php" class="waves-effect" >Search</a>
                            
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
    
   
  
</header>

        <h2>Search Product</h2>
          <form name="form" id="form_search">

         
            <input type="text" id="Serach-box" value="" name="sear" placeholder="Serach Product" />
            
        </form>
        <div id="show">
        <a id="link" href="#">
            
        </a></div>

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
$(".button-collapse").sideNav();

// Custom scrollbar init
var el = document.querySelector('.custom-scrollbar');
Ps.initialize(el);

//modal
$('#myModal').modal()
$('#myModal').modal({
  keyboard: false
})

$('#myModal').modal('toggle')
$('#myModal').modal('show')
$('#myModal').modal('hide')
$('#myModal').on('hidden.bs.modal', function (e) {
  // do something...
})

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
                        
                        $("#show").html('<a id="id" href="index.php">'+data+'</a>');
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
