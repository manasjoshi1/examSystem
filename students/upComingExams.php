<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>


    <?php require("../includes/nav.php");?>
    <main  role='main' class='container'>
<br>
    <div class="card-deck">
    <?php
    $counter=1;

    if ($_SESSION['userType']=='1') {

    require_once(dirname(__FILE__).'/../db/config.php');

    $board_id=$_SESSION['s_board'];
    $b_id=$_SESSION['s_branch'];
    $g_id=$_SESSION['s_grade'];
    $query="SELECT * FROM paper where board_id=$board_id AND  b_id=$b_id or b_id =0 And g_id=$g_id order by p_id desc  ";
    $runQuery=mysqli_query($conn,$query);
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






    ?>
<?php
// if($counter%3!=0){
$date1=date('yy-m-d');
$t=strtotime(date('g:i:s'));
echo "
      <div class='card border-primary mb-3' style='max-width: 18rem;'>
        <div class='card-header'>$p_topic </div>
        <div class='card-body text-primary'>
          <h6 class='card-title'>Date: $p_s_date - $p_t_date</h6>
          <p class='card-text'>Time:$p_s_time - $p_t_time</p>
          <p class='card-text'>$p_max_marks $counter</p>";


          if($date1>=$p_s_date && $date1<=$p_t_date){

            if( $t>=strtotime($p_s_time) && $t<=strtotime($p_t_time))
            {
            echo "<a href='../createdPaper/viewpdf.php?p_id=$p_id' target='_blank'  class='btn btn-success btn-sm' >Open</a><br><hr>";

            echo "<a href='../students/submit_paper.php?p_id=$p_id'  class='btn btn-info btn-sm' >Submit Paper</a>";
          }
          elseif($t<strtotime($p_s_time) && $t>strtotime($p_t_time)){
            echo "<a href='#' class='btn btn-danger' >Paper Expired</a>";

          }
          else {
            echo "<a href='#' class='btn btn-warning' >Paper Yet to Come</a>";
          }
      }
        elseif($date1>$p_s_date || $date1>=$p_t_date){
        echo "<a href='#' class='btn btn-danger' >Paper Expired</a>";
      }
        elseif($date1<$p_s_date || $date1<=$p_t_date){
        echo "<a href='#' class='btn btn-warning' >Paper Yet to Come</a>";
      }

echo "
        </div>
      </div>
           ";
           $counter++;
         // }
         // else {
         //   $counter=0;
         //   echo "
         //           </div><div class='card-deck'>";
         //
         // }
       }
     }

         ?>

       </div>
</main>

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
} ?>
<?php require("../includes/footer.php");
