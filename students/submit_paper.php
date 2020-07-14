<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("nav.php");?>
    <?php require("../db/collectPaper.php");?>

    <main  role="main" class="container">
    <?php
    require_once(dirname(__FILE__).'/../db/config.php');

    if(isset($_GET['p_id'])){
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
        $p_max_marks=$row['p_max_marks'];
        $p_link=$row['p_link'];
        $p_topic=$row['p_topic'];
        $g_id=$row['g_id'];
        $b_id=$row['b_id'];
        $board_id=$row['board_id'];

    }

    $board_s_id=$_SESSION['s_board'];
    $b_s_id=$_SESSION['s_branch'];
    $g_s_id=$_SESSION['s_grade'];
    $s_id=$_SESSION['s_id'];

    if($board_s_id==$board_id && ($b_id==$b_s_id||$b_id==0)&&$g_id==$g_s_id){

        $query="SELECT * FROM collected_paper where p_id=$p_id and s_id=$s_id";
        $res=mysqli_query($conn,$query);

        if(mysqli_num_rows($res)==0){

    $date1=date('yy-m-d');
    $t=strtotime(date('H:i:s'));

    if($date1>=$p_s_date && $date1<=$p_t_date){
      if( $t>=strtotime($p_s_time) && $t<=strtotime($p_t_time))
      {
        ?>
        <div class="mycontainer" >
          <div class="">
            <h1 class="display-4">Upload Your Paper Here</h1>
            <hr>
          </div>
        <form action="" method="post" enctype="multipart/form-data">
                       <input type="hidden" class="form-control"  value="<?php echo "email"?>"aria-describedby="emailHelp" placeholder="Enter email">
                   <div class="form-group" >
                     <input type="file" name="fileToUpload" id="fileToUpload">

                     </div>
                     <input type="hidden" class="" name="p_id" value="<?php echo $p_id; ?>">
                     <input type="hidden" class="" name="fileToUpload" id="fileToUpload">
                     <div class="form-group">

                   <div class="account-dialog-actions">
                       <button type="submit" name="submit"  value="collectPaper" class="btn btn-info">Add Paper</button>
                   </div>
                   </div>
               </form>
             </div>

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
else{
  echo "<a href='#' class='btn btn-danger btn-lg' >You have already submitted</a>";

}
}
}


}

    ?>

           </main>

           <?php require("../includes/footer.php");
