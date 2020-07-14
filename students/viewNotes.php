<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>


    <?php require("nav.php");?>
    <main  role='main' class='container'>

    <div class="card-deck">
    <?php
    $counter=1;

    if ($_SESSION['userType']=='1') {

    require_once(dirname(__FILE__).'/../db/config.php');

    $board_id=$_SESSION['s_board'];
    $b_id=$_SESSION['s_branch'];
    $g_id=$_SESSION['s_grade'];
    $query="SELECT * FROM notes where (board_id=$board_id or board_id =0) AND  (b_id=$b_id or b_id =0) And g_id=$g_id order by n_id desc  ";
    $runQuery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runQuery)==0){
      echo "Nothing";
    }
    else {

        echo '<table class="table table-bordered table-striped tablesorter">
        <thead align="center">
          <tr>
          <th>Title</th>
          <th>Topics</th>
          <th>Link</th>
         </tr>
       </thead>
       <tbody>';
      while($row=mysqli_fetch_assoc($runQuery)){
      $n_id=$row['n_id'];
      $p_link=$row['n_link'];
      $n_topic=$row['n_topic'];

      echo "<tr><td>{$row['n_title']}</td>";
      echo "<td>{$row['n_topic']}</td>";
      echo "<td><a href='../createdNotes/viewAnswer.php?p_id=$row[n_link]' >Open</a></td></tr>";

    ?>
<?php


       }
     }
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
     </table>
              </div>

              </main>

     </body>
     </html>
     <?php


     ?>
     <?php require("../includes/footer.php");?>
