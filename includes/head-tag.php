<?php ob_start(); ?>

<?php
session_start();
if(!isset($_SESSION['username'])){
 header("location:../logout.php");
      }
      else {
        if((time() - $_SESSION['last_time']) > 1800 ) // Time in Seconds
        {
         echo "<script>alert('You have been logged out due to inactivity')</script>";
         header("location:../logout.php");
        }
        else
        {
          $_SESSION['last_time'] = time();

          date_default_timezone_set("Asia/Calcutta");

          ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style media="screen">
body { padding-top: 6.5rem; }

</style><?php
}

}
?>
