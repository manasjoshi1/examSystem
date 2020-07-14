<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>

    <?php require("../includes/nav2.php");
    if ($_SESSION['userType']=='2') {

    ?>
    <?php include("../db/allStudents.php");?>

    <?php displayStudents();?>

    <main  role="main" class="container">
<?php inactiveStudent()?>

           </main>


  </body>
</html>
<?php
}
else {
  echo '
          <section class="ftco-section contact-section ftco-degree-bg" style="text-align:center">
            <div class="container">
              <div class="row block-9">
                <div class="col-sm-9 col-md-8 col-lg-8 mx-auto" >
                <h1>Unauthorized Access!!</h1><br>
          <a href="../logout.php" class="btn btn-primary btn-lg" >Go Back to login</a></div></div></div></section>';
}
 ?>
 <?php require("../includes/footer.php");?>
