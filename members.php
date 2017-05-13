<?php

session_start();
$pageTitle = 'Members';


if(isset($_SESSION['name1'])){
//  echo 'Welcome '.$_SESSION['Username'];


  include 'init.php';
  $do =isset($_GET['do']) ? $_GET['do']: 'Manage';
if($do =='Manage')
{

  $var ='';
  if(isset($_GET['pagedo']) && $_GET['pagedo'] == 'Pending')
  {
    $var ='AND RegStatus = 0';

  }

    $query =$db->prepare("SELECT * FROM user WHERE GROUPID != 1 $var");
      // $query =$db->prepare("SELECT * FROM user WHERE GROUPID != 1");

  $query->execute();

  $rows = $query->fetchAll();
  ?>

<!--  echo "Welcome TO Manage Members Page";-->


  <h1 class="text-center">Manage Members</h1>
  <div class="container">
    <div class="table-responsive">
      <table class="table text-center table-bordered">
        <tr>
          <td>#ID</td>
          <td>Username</td>
          <td>Email</td>
          <td>address</td>
          <td>Full Name</td>
          <td>Registered Date</td>
          <td>Control</td>
        </tr>
        <?php
            foreach ($rows as $row) {
                  echo "<tr>";

                        echo "<td>" . $row['uid'] . "</td>";
                        echo "<td>" . $row['name1'] . "</td>";
                       echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                       echo "<td>" . $row['FullName'] . "</td>";
                       echo "<td>" . $row['Date'] . "</td>";
                        echo "<td>
                        <a href='members.php?do=Edit&userid=" . $row['uid'] ." 'class='btn btn-success'> <i class='glyphicon glyphicon-edit'></i>Edit</a>
                        <a href='members.php?do=Delete&userid=" . $row['uid'] ." 'class='btn btn-danger'><i class='glyphicon glyphicon-remove-sign'></i>Delete</a>";

                          if($row['RegStatus'] == 0)
                          {
                            echo "<a href='members.php?do=Activate&userid=" . $row['uid'] ."' class='btn-btn-info'><i class='glyphicon glyphicon-remove-sign'></i>Activate</a>";

                          }
                                                echo "</td>";
                          echo "</tr>";


                         
            }
            ?>


      </table>

<a href="members.php?do=Add" class="btn btn-primary"><i class=" glyphicon glyphicon-plus-sign"></i>  Add New Member</a>
</div>
<?php      }
elseif ($do == 'Add') { ?>

                  <!--  echo 'Welcome To Add Members Page';-->

                      <h1 class="text-center">Add New Member</h1>
                      <div class="container">
                        <form class="form-horizontal" action="?do=Insert" onsubmit="return signUpValidate()" method="POST">

                            <div class="form-group form-group-lg" >
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="username" id="name" class="form-control"  autocomplete="off" placeholder="Username To Login Into Shop" value="<?php if (isset($_REQUEST['ad'])) {echo $user;} ?>"/>
                                    <small class="Errors" id="nameError" > <?php if (isset($nameError)) {echo $nameError;} ?></small>

                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10 col-md-6">
                              <input type="password" name="password" id="password" class="password form-control" autocomplete="password"  placeholder="Password Must Be Hard and Complex" / ><!--ye jo class main pass likha hai ye eye ke class k liay use ho rha hai -->
                              <small class="Errors" id="passwordError"><?php if (isset($passwordError)) {echo $passwordError;} ?></small>
                              
                   
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="email" id="email"  class="form-control"  placeholder="Enter The Valid Email" value="<?php if (isset($_REQUEST['ad'])) {echo $email;} ?>" />
                                    <small class="Errors" id="emailError"><?php if (isset($emailError)) {echo $emailError;} ?></small>

                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="address" id="address" class="form-control"  placeholder="Enter The address" value="<?php if (isset($_REQUEST['ad'])) {echo $address;} ?>" />
                                    <small class="Errors" id="addressError"><?php if (isset($addressError)) {echo $addressError;} ?></small>

                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="full" id="fname" class="form-control" placeholder="Enter The Full Name" value="<?php if (isset($_REQUEST['ad'])) {echo $name;} ?>" />
                                    <small class="Errors" id="fnameError"><?php if (isset($fnameError)) {echo $fnameError;} ?></small>

                                </div>
                            </div>

                            <div class="form-group form-group-lg">
                          <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Add Member" name="ad" class="btn btn-primary btn-lg" />
                                </div>
                            </div>

                          </form>
                      </div>

}
<?php } 
        elseif ($do == 'Insert') {
          # code...

              if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                echo "<h1 class='text-center'>Insert Member</h1>";
                echo "<div class = 'container '> ";

                  //Get Variable From the form by name




                  
                  $user = trim($_POST['username']);
                  $user=htmlentities($user);
                  $pass = trim($_POST['password']);
                  $pass=htmlentities($pass);
                  $email= trim($_POST['email']);
                  $email=htmlentities($email);
                  $address=trim($_POST['address']);
                  $address=htmlentities($address);
                  $name = trim($_POST['full']);

              /*
                    $nameCheck="/^[A-Za-z_ ]{3,20}+$/";
                    $emailCheck="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
                    $addressCheck="/^[A-Za-z0-9 _#]{3,20}+$/";
                    $fnameCheck="/^[A-Za-z \s]{3,20}+$/";
                    $check=0;
                    //Validate The Form
                   //Check feilds for empty and values
        if(!empty($user))
        {

          if(preg_match($nameCheck, $user))
          {
            

            $stat= $db->prepare("CALL uniqueName(:nam)");
            $stat->bindParam(":nam", $name);
            $stat->execute();
            $rec= $stat->fetchAll(PDO::FETCH_ASSOC);
            if($rec == false)
            {

              $check++;
            }
            //if same name exist then give errror it is already taken chose another
            else
            {
              $nameError="*Name is alreay taken. Choose another.";
            }
              
            }
          else
          {
            //echo "vaild name";
            $nameError="*Enter the Valid Name. Use Only Alphabits.";
          
          }
        }
        else
        {
            $nameError="*Fillout Name Field.";
        
        }

        if(!empty($pass))
        {
          
            $check++;
        }
        else{

          $passwordError="*Fillout No of Password Field.";
                                  
        } 


        if(!empty($email))
        {
          if(preg_match($emailCheck, $email))
          {
            $check++;

          }
                                              
          else
          {
            $emailError="*Enter the Valid Email.";    
                            
          }
        }
        else
        {
          $emailError="*Fillout No of Email Field.";
                                  
        } 



        
        if(!empty($address))
        { 
          if(preg_match($addressCheck, $address))
          {
              $check++;
          }
                                              
          else
          {
            $addressError="*Enter the Valid address.";
            
          }

        } 
        else
        {
            $addressError="*Fillout address Field.";
                                            
        } 

        if(!empty($name))
        {  
          if(preg_match($fnameCheck, $name))
            {
              $check++;
            } 
              else
              {
                $fnameError="*Enter the Valid Name.";
              
              }
        }

          else
          {
              $fnameError="*Fillout Name Field.";                                  
          }  

        if ($check==5) {
                      
                    */

                      $query = $db->prepare("INSERT INTO
                          user(name1, pass1, email,address, FullName, RegStatus, Date)
                          VALUES(:user, :pass, :mail,:address, :name, 1, now()) ");
                          $query->execute(array(
                            'user' => $user,
                            'pass' => $pass,
                            'mail' => $email,
                            'address' => $address,
                            'name' => $name
                          ));



                        echo "<div class = 'alert alert-success'>" . $query->rowCount() . ' Record Updated</div>';



                   // }


                } else {
                      echo "Sorry You Cant Browse This page Directly";
                  }
                  echo "</div>";
        }


elseif ($do =='Edit') {
  $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
//echo $userid;



         $query = $db->prepare("SELECT * FROM user  WHERE uid = ? LIMIT 1");
          //intval = value in inte
         //print_r($row->Username);
          $query->execute(array($userid));
          //Fetch The Data
          $row = $query->fetch();

          $count = $query->rowCount();
          if($query->rowCount() > 0){ ?>
      <!--    //  echo 'Good This is the Form';-->

                      <h1 class="text-center">Edit Member</h1>
                      <div class="container">
                        <form class="form-horizontal" action="?do=Update"  method="POST">
                          <input type="hidden" name="userid" value="<?php echo $userid ?>" />
                            <div class="form-group form-group-lg" >
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="username" id="name" required="" class="form-control" value="<?php echo $row['name1'] ?>" autocomplete="off" />
                                    <small class="Errors" id="nameError" > <?php if (isset($nameError)) {echo $nameError;} ?></small>
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="hidden" name="oldpassword" value="<?php echo $row['pass1'] ?>" />
                                    <input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Leave It Blank If U Dont Want To Change" / >
                    <!--                <input type="password" name="newpassword" class="form-control" autocomplete="new-password" />-->

                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="email" name="email" id="email" required="" value="<?php echo $row['email'] ?>" class="form-control"  />
                                    <small class="Errors" id="emailError"><?php if (isset($emailError)) {echo $emailError;} ?></small>
                                </div>
                            </div>
                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">address</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="address" id="address" required="" value="<?php echo $row['address'] ?>" class="form-control" />
                                      <small class="Errors" id="addressError"><?php if (isset($addressError)) {echo $addressError;} ?></small>

                                </div>
                            </div>

                            <div class="form-group form-group-lg">
                                <label class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10 col-md-6">
                                    <input type="text" name="full" id="fname" required="" value="<?php echo $row['FullName'] ?>" class="form-control" />
                                    <small class="Errors" id="fnameError"><?php if (isset($fnameError)) {echo $fnameError;} ?></small>
                                </div>
                            </div>

                            <div class="form-group form-group-lg">
                          <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Save" class="btn btn-primary btn-lg" />
                                </div>
                            </div>

                          </form>
                      </div>



<?php
    } else {
        echo "There is no Such ID";
    }





}elseif ($do == 'Update') {
  # code...
  echo "<h1 class='text-center'>Update Member</h1>";
  echo "<div class = 'container '> ";
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          //Get Variable From the form by name
          $id = $_POST['userid'];
          $user = $_POST['username'];
          $email= $_POST['email'];
          $address= $_POST['address'];
          $name = $_POST['full'];

         //Password Trick

         $pass = empty($_POST['newpassword']) ? $_POST['oldpassword'] : $_POST['newpassword'];
        
            //Validate The Form
          

                $query = $db->prepare("UPDATE user SET name1 = ?, email = ?, address=?, FullName = ?, pass = ? WHERE uid = ?");
               
                $query->execute(array($user, $email, $name,$address, $pass, $id));

            //echo Success Message


                echo "<div class = 'alert alert-success'>" . $query->rowCount() . ' Record Updated</div>';



            


        } else {
              echo "Sorry You Cant Browse This page Directly";
          }
          echo "</div>";
  }
  elseif ($do == 'Delete') {

echo "<h1 class='text-center'>Delete Member</h1>";
echo "<div class='container'>";

    $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
  //echo $userid;



           $query = $db->prepare("SELECT * FROM user  WHERE uid = ? LIMIT 1");
            //intval = value in inte
           //print_r($row->Username);
            $query->execute(array($userid));
            //Fetch The Data
      //      $row = $query->fetch();

            $count = $query->rowCount();
            if($query->rowCount() > 0){
                $query = $db->prepare("DELETE FROM user WHERE uid= :user");
                $query->bindParam(":user",$userid);
                $query->execute();
                echo "<div class = 'alert alert-success'>" . $query->rowCount() . ' Record Deleted</div>';


            }
            else {
              echo 'not exist';
            }
            echo "</div>";

  }

  elseif ($do =='Activate') {
    echo "<h1 class='text-center'>Activate Member</h1>";
    echo "<div class='container'>";

        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;
      //echo $userid;



              $query = $db->prepare("SELECT * FROM user  WHERE uid= ? LIMIT 1");
                $query->execute(array($userid));
                //intval = value in inte
               //print_r($row->Username);


                $query->execute(array($userid));
                //Fetch The Data
          //      $row = $query->fetch();

                $count = $query->rowCount();
                if($query->rowCount() > 0){
                    $query = $db->prepare("UPDATE user SET  RegStatus = 1 WHERE uid =?");

                    $query->execute(array($userid));
                    echo "<div class = 'alert alert-success'>" . $query->rowCount() . ' Record Updated</div>';


                }
                else {
                  echo 'not exist';
                }
                echo "</div>";
  
}
  include $calltp . 'footer.php';

}
else {
//  echo "You are not Authorized to view";
  header('Location: index.php');
  exit();
}
