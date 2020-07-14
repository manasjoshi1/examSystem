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
    <?php require("../db/config.php");?>


    <main  role="main" class="container">
      <div class="container-fluid form-container">
        <?php require("../db/fileUpload.php");
        ?>
<?php

  $conn=$GLOBALS['conn'];
  $row3= array();
  $q="SELECT  * FROM collected_paper  where ch_id IS NULL order By p_id ";
  $res=mysqli_query($conn,$q);
  if(!$res){
    echo mysqli_error($conn);
  }

if(mysqli_num_rows($res)>0){

  echo '<table class="table table-bordered table-striped tablesorter">
  <thead align="center">
    <tr>
    <th>Name</th>
    <th>Grade</th>
    <th>Branch</th>
    <th>Paper Link</th>
    <th>Upload</th>
    <th>Marks</th>
    <th>Submit</th>
   </tr>
 </thead>
 <tbody>';
 while($row=mysqli_fetch_assoc($res))
{
  $cl_p_id=$row['cl_p_id'];
  $qu="SELECT  * FROM student  where s_id=$row[s_id] ";
  $resu=mysqli_query($conn,$qu);
  while($row2=mysqli_fetch_assoc($resu)){
    echo "<td>{$row2['s_name']}</td>";
    echo "<td>{$row2['s_grade']}</td>";
    echo "<td>{$row2['s_branch']}</td>";
    echo "<td><a href='../collectedPaper/$row[cl_p_link]' download>Download</a></td>";
    echo "<td>
    <form action='' method='post' enctype='multipart/form-data'>
                 <div class='form-group'>
                   <input type='file' class='' name='fileToUpload' id='fileToUpload'>
                   <input type='hidden' class='' name='cl_p_id' value='$cl_p_id'>
                   </div>

    </td>";
    echo "<td> <input type='text' class='form-control' name='ch_marks' required aria-describedby='emailHelp' placeholder='Marks Obtained'></td>";
    echo "<td>  <button type='submit' name='submit' class='btn btn-info'>Add Paper</button>
    </form>
    </td>";



}

}
}
}?>
</table>
           </div>

           </main>

  </body>
</html>
<?php
// }
// else {
//   echo '
//           <section class="ftco-section contact-section ftco-degree-bg" style="text-align:center">
//             <div class="container">
//               <div class="row block-9">
//                 <div class="col-sm-9 col-md-8 col-lg-8 mx-auto" >
//                 <h1>Unauthorized Access!!</h1><br>
//           <a href="../logout.php" class="btn btn-primary btn-lg" >Go Back to login</a></div></div></div></section>';
// }
 ?>
 <?php require("../includes/footer.php");?>
