<?php
  //delete user
   require_once('dbconnection.php');
   //sql query
   $sql=mysqli_query($conn, "DELETE FROM enrollments WHERE id ='".$_GET['id']."'");
   if($sql)
   {
      echo "user deleted successfully";
      header('location:students.php');
   }
   else
   {
      echo "error occured. Please try again";
   }
?>