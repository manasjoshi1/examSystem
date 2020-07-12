<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("../includes/nav.php");?>
    <main  role="main" class="container">


    <form action="db/paper.php" method="post" enctype="multipart/form-data">
                     <input type="hidden" class="form-control"  value="<?php echo "email"?>"aria-describedby="emailHelp" placeholder="Enter email">
                 <div class="form-group">
                   <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload">
                   </div>
                 <div class="account-dialog-actions">
                     <button type="submit" class="btn btn-primary">Add Paper</button>
                 </div>
             </form>
           </main>


  </body>
</html>
