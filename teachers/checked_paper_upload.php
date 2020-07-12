<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require("../includes/head-tag.php");?>
  </head>
  <body>
    <?php require("../includes/nav2.php");?>
<main  role="main" class="container">


    <form action="db/paper.php" method="post" enctype="multipart/form-data">
                 <!-- <div class="form-group">
                     <input type="text" class="form-control" name="cl_p_id" placeholder="Collected Paper ID">
                 </div> -->


                 <div class="form-group">
                   <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload">
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" name="ch_marks" aria-describedby="emailHelp" placeholder="Marks Obtained">
                   </div>
                 <div class="account-dialog-actions">
                     <button type="submit" class="btn btn-primary">Add Paper</button>
                 </div>
             </form>
           </main>

  </body>
</html>
