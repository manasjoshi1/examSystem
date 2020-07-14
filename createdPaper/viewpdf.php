<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("../includes/nav.php");
    require_once(dirname(__FILE__).'/../db/config.php');

    if($_GET['p_id']){
      $p_id=$_GET['p_id'];

      $query="SELECT * FROM paper where p_id=$p_id ";
      $runQuery=mysqli_query($conn,$query);
      if(!$runQuery){
        die($query);
      }
      if(mysqli_num_rows($runQuery)==0){
        echo "Nothing";
      }
      else {
        while($row=mysqli_fetch_assoc($runQuery)){
        $p_s_date=$row['p_date'];
        $p_s_time=$row['p_s_time'];
        $p_id=$row['p_id'];
        $p_t_date=$row['p_e_date'];
        $p_t_time=$row['p_e_time'];

    }

    $date1=date('yy-m-d');
    $t=strtotime(date('g:i:s'));
    if($date1>=$p_s_date && $date1<=$p_t_date){
      if( $t>=strtotime($p_s_time) && $t<=strtotime($p_t_time))
      {
?>
      <iframe src='<?php echo $p_id;?>.pdf' style='width:100%; height:40rem;' frameborder='0'></iframe>
      <?php

      }
      elseif($t<strtotime($p_s_time) && $t>strtotime($p_t_time)){
      echo "<a href='#' class='btn btn-danger' >Invalid Activity</a>";

      }
      else {
      echo "<a href='#' class='btn btn-danger btn-lg' >Invalid Activity</a>";
      }
      }

      elseif($date1>$p_s_date || $date1>=$p_t_date){
      echo "<a href='#' class='btn btn-danger btn-lg' >Invalid Activity</a>";
      }
      elseif($date1<$p_s_date || $date1<=$p_t_date){
      echo "<a href='#' class='btn btn-danger btn-lg' >Invalid Activity</a>";
      }


      }

      }






      ?>
      <?php require("../includes/footer.php");
