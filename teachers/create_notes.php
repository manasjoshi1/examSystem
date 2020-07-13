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
    <?php require("../db/createNotes.php");?>


    <main  role="main" class="container mycontainer">
      <div class="container-fluid form-container">

    <form action="" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                   <label class="">Notes Title</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" name="p_s_date"aria-describedby="emailHelp" placeholder="Enter email">
                 </div>

                 <div class="form-group">
                   <label class="">Board</label>

                     <input type="text" class="form-control" list="boards" name="board_id"id="exampleInputPassword1" placeholder="Board">
                 </div>
                 <div class="form-group">
                   <label class="">Branch</label>

                     <input type="text" class="form-control" name="b_id" list="branches" id="exampleInputPassword1" placeholder="Branch">
                 </div>
                 <div class="form-group">
                   <label class="">Grade</label>

                     <input type="text" class="form-control" name="g_id" list="grades" id="exampleInputPassword1" placeholder="Grade">
                 </div>
                 <div class="form-group">
                   <label class="">Topics</label>

                     <input type="text" class="form-control" name="p_topic"id="exampleInputPassword1" placeholder="Topics">
                 </div>
                 
                 <div class="form-group">
                   <label class="">Choose File:</label>

                   <input type="file" name="fileToUpload" id="fileToUpload">
                   </div>
                 <div class="account-dialog-actions">
                     <button type="submit"  name="submit" value="addPaper"class="btn btn-primary">Add Paper</button>
                 </div>
             </form>
           </div>

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
