<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php
    require("../students/nav2.php");
    require_once(dirname(__FILE__).'/../db/config.php');

    if($_GET['p_id']){
      $p_id=$_GET['p_id'];


?>
      <iframe src='<?php echo $p_id;?>' style='width:100%; height:40rem;' frameborder='0'></iframe>

      <?php
    }
       require("../includes/footer.php");
      ?>
