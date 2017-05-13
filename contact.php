<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body class="hidden-sn blue-skin">

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
            </li>
            
        </ul --!>

    </nav>
    <!--/.Navbar-->

</header>
<!--Section: Contact v.2-->
<section class="section">

    <!--Section heading-->
    <h1 class="section-heading">Contact </h1>
    <!--Section sescription-->
    <p class="section-description m-b-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

    <div class="row">

        <!--First column-->
        <div class="col-md-8">
            <form>
                <!--First row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="form41" class="form-control">
                                <label for="form41" class="">Your name</label>
                            </div>
                        </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <div class="md-form">
                                <input type="text" id="form52" class="form-control">
                                <label for="form52" class="">Your email</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.First row-->

                <!--Second row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" id="form51" class="form-control">
                            <label for="form51" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--/Second row-->

                <!--Third row-->
                <div class="row">
                    <!--First column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="form76" class="md-textarea"></textarea>
                            <label for="form76">Your message</label>
                        </div>

                    </div>
                </div>
                <!--/.Third row-->
            </form>

            <div class="center-on-small-only">
                <a class="btn btn-ins">Send</a>
            </div>
        </div>
        <!--.First column-->

        <!--Second column-->
        <div class="col-md-4">
            <ul class="contact-icons">
                <li><i class="fa fa-map-marker fa-2x"></i>
                    <p>New York, NY 10012, USA</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--.Second column-->

    </div>
</section>
<!--/Section: Contact v.2-->



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