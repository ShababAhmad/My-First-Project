<?php

include 'connect.php';
$calltp = 'includes/templates/'; //template directory
$func  =  'includes/functions/';
$callcs = 'layout/css/' ;      //css files
$calljs = 'layout/js/' ;      //js files

  include $func . 'functions.php';
  include $calltp . 'header.php';

//include navbar except loginpage
if(!isset($nonavbar))  {include $calltp . 'navbar.php';}
