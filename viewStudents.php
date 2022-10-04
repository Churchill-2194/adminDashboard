<?php
  //database connection
   require_once('dbconnection.php');
   //sql query
   $sql=mysqli_query($conn, "SELECT * FROM enrollments WHERE id ='".$_GET['id']."'");
   while($row=mysqli_fetch_array($sql))
   {
      $studentId = $row['id'];
      $name=$row['name'];
      $email=$row['email'];
   }
?>

<!DOCTYPE html>
<html lang="en">
  <?php
   require_once('includes/links.php');
  ?>
    <body>
     <?php
          require_once('includes/header.php');
          require_once('includes/sidebar.php');

          //fetch all user records
          //1. database connection
          require_once('dbconnection.php');
        ?>  

       <div class="main-content">
          <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-6">
                       <div class="card">
                            <div class="card-header bg-dark text-white text-center">
                               <span class="float-left"><i class="fa fa-user fa-lg"></i></span>
                               <span>User Profile</span>

                            </div>
                           <div class="card-body">
                               <ul class="list-group">
                                   <li class="list-group-item">Name:
                                       <span class="badge badge-primary badge-pill"><?php echo $name?></span>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-6">
                      <div class="card">
                          <div class="card-header bg-dark text-white text-center">
                               <span class="float-left"><i class="fa fa-user fa-lg" ></i></span>
                               <span>User Profile</span>
                          </div>
                          <div class="card-body">
                              <ul class="list-group">
                                  <li class="list-group-item">Name:
                                      <span class="badge badge-success badge-pill"><?php echo $email?></span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                   </div>
               </div>
           </div>
        </div>

    </body>
</html>