<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php require("../includes/head-tag.php");?>
    <link rel="stylesheet" href="../css/forms.css">


  </head>
  <body>
    <?php require("nav.php");
    if ($_SESSION['userType']=='1') {
    ?>
    <?php require("../db/config.php");?>


    <main  role="main" class="container">
      <div class="container-fluid form-container">
        <?php require("../db/fileUpload.php");
        ?>
<?php

  $conn=$GLOBALS['conn'];
  $row3= array();
  $s_id=$_SESSION['s_id'];
  $q="SELECT  * FROM collected_paper  where ch_id IS not NULL and s_id=$s_id ";
  $res=mysqli_query($conn,$q);
  if(!$res){
    die(mysqli_error($conn));
  }

if(mysqli_num_rows($res)>0){

  echo '<table class="table table-bordered table-striped tablesorter">
  <thead align="center">
    <tr>
    <th>Topic</th>
    <th>Out Of</th>
    <th>Marks</th>

    <th>Paper</th>
   </tr>
 </thead>
 <tbody>';

 while($row=mysqli_fetch_assoc($res))
{

  $qu="SELECT  * FROM checked_paper  where ch_p_id=$row[ch_id] limit 1 ";
  $resu=mysqli_query($conn,$qu);

  $query="SELECT  * FROM paper  where p_id=$row[p_id]";
  $result=mysqli_query($conn,$query);

    while($row3=mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row3['p_topic']}</td>";
    echo "<td>{$row3['p_max_marks']}</td>";
  }

    while($row2=mysqli_fetch_assoc($resu)){
echo "<td>{$row2['ch_marks']}</td>";
echo "<td><a href='../checkedPaper/viewAnswer.php?p_id=$row2[ch_link]' >Paper</a></td></tr>";

}

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
