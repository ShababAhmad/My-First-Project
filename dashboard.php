<?php
session_start();
if(isset($_SESSION['name1'])){
//  echo 'Welcome '.$_SESSION['Username'];



$pageTitle = 'Dashboard';
  include 'init.php';
  //print_r($_SESSION);
//echo "Welcome";
 
 
?>
   <!-- Start Dashboard   -->
<div class="home-stats">
<div class="container home-stats text-center">
  <h1>Dashboard</h1>
    <div class="row">

        <div class="col-md-3">
            <div class="stat st-members">
              Total Members
              <span><a href="members.php"><?php countItems('uid','user') ?></a></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat st-pending">
              Pending Members
              <span><a href="members.php?do=Manage&pagedo=Pending"><?php checkItem('RegStatus','user',0) ?></a></span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stat st-total">
               <span><a href="items.php"><?php countItem('id','product') ?></a></span>
             
            </div>
        </div>
    </div>
</div>
</div>

<div class="latest">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <?php $latestUser=5; ?>
        <div class="panel-heading">
          <i class="glyphicon glyphicon-user " area-hidden="true"></i>Latest <?php echo $latestUser;  ?> Rigestered Users

        </div>
        <div class="panel-body">
          <ul class="list-unstyled latest-user">
            <?php
                $latest=getLatest();
                  foreach ($latest as $user) {
                  echo '<li>';
                      echo $user['name1'];
                      echo '<a href="members.php?do=Edit&userid='.$user['uid'] .'">';
                      echo '<span class="btn btn-success pull-right">';
                      echo '<i class="fa fa-edit" >Edit </i>';
                        if($user['RegStatus'] == 0)
                          {
                            echo "<a href='members.php?do=Activate&userid=" . $user['uid'] ."' 
                            class='btn-btn-info pull-right activate'><i class='fa fa-close'></i>Activate</a>";

                          }
                     
                  echo '</a>';
                  echo '</span>';
                  echo '</li>';
            }?>
          </ul>
        </div>

      </div>

    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
      <?php $latestitem=5; ?>
        <div class="panel-heading">
          <i class="glyphicon glyphicon-tag  "></i>Latest &nbsp;<?php echo $latestitem;  ?>  Items

        </div>
        <div class="panel-body">
          <ul class="list-unstyled latest-user">
            <?php
                $latest=getLatestitem();
                  foreach ($latest as $user) {
                  echo '<li>';
                      echo $user['pname'];
                      //echo '<a href="members.php?do=Edit&userid='.$user['uid'] .'">';
                     // echo '<span class="btn btn-success pull-right">';
                     // echo '<i class="fa fa-edit" >Edit </i>';
                       
                     
                  echo '</a>';
                  echo '</span>';
                  echo '</li>';
            }?>
          </ul>
        </div>

      </div>

    </div>

  </div>
</div>
</div>

<?php
/* End Dashboard   */
  include $calltp . 'footer.php';

}
else {
//  echo "You are not Authorized to view";
  header('Location: index.php');
  exit();
}
