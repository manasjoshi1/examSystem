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
                 <div class="form-group">
                     <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                     <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="grade"id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="board" id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control"name="branch" id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="max_marks"id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-group">
                     <input type="text" class="form-control" name="topic"id="exampleInputPassword1" placeholder="Password">
                 </div>
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
