<?php
session_start();
$nonavbar ='';
$pageTitle = 'Login';

if(isset($_SESSION['name1'])){
  header('Location: dashboard.php');
}
include 'init.php';

    //session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username =$_POST['user'];
          $password =$_POST['pass'];
      //    $hashedPass=sha1($password);
        //  echo "$hashedPass";
        //  echo $username . ' ' . $password;

         $query = $db->prepare("SELECT uid, name1, pass1
           FROM
            user
              WHERE name1 = ?
                AND
                    pass1= ?
                AND
                    GroupID = 1
                    LIMIT 1");
         //print_r($row->Username);
          $query->execute(array($username, $password));
          $row = $query->fetch();
          $count = $query->rowCount();
      //      echo $count;
        if($count > 0)
          {
          //  print_r($row);
            echo 'Welcome ' . $username;
          $_SESSION['name1'] = $username;
          $_SESSION['uid'] = $row['UserID'];
            header('location: dashboard.php');
            exit();

            
          }
          else {
            # code...
          //  header('location: logindex.php');
          }



    }

 ?>

<!--Welcome to index-->
<!--<i class="fa fa-home fa-5x"></i>-->

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

  <h4>Admin Login</h4>
    <input class="form-control" type="text" name="user"  placeholder="UserName" autocomplete="off">
    <input class="form-control" type="password" name="pass"  placeholder="Password" autocomplete="off">
    <input class="btn btn-primary btn-block" type="Submit" value="Login" >
</form>
 <?php
     include $calltp . 'footer.php';
  ?>
