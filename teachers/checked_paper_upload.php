<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require("../includes/head-tag.php");?>
    <link rel="stylesheet" href="../css/forms.css">

  </head>
  <body>
    <?php require("../includes/nav2.php");
    if ($_SESSION['userType']=='2') {
    ?>
    <?php require("../db/fileUpload.php");
    ?>
<main  role="main" class="container">


    <form action="" method="post" enctype="multipart/form-data">


                 <div class="form-group">
                   <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload">
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" name="ch_marks" aria-describedby="emailHelp" placeholder="Marks Obtained">
                   </div>
                 <div class="account-dialog-actions">
                     <button type="submit" name="submit" class="btn btn-primary">Add Paper</button>
                 </div>
             </form>
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
