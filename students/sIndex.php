
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("nav.php");
    if ($_SESSION['userType']=='1') {
    ?>
    <main  role="main" class="container">
      <div class="jumbotron jumbotron-fluid">
  <div class="container">
     <h3 class="display-4">Hey <?php echo $_SESSION['username']; ?></h3>
     <br>
  <div class="lead">
  <p>Let's take a look at any upcoming exams... <a href="upComingExams.php"><button type="button" class="btn btn-info" name="button">Exams✒</button></a> </p>
</div>
<div  class="lead">
  <p> There may be few notes waiting for you so that you can score great marks... <a href="viewNotes.php"><button type="button" class="btn btn-info" name="button">Notes📖</button></a> </p>
</div>
<div  class="lead">
  <p>Hey! Check wether your details with us are correct or not... <a href="viewUser.php?id=<?php echo $_SESSION['s_id'];?>"><button type="button" class="btn btn-info" name="button">Profile😀</button></a> </p>
</div>
<br>
</div>
</div>

<h3>Your Time Table :</h3>
<br>
<div class="" style="text-align:center">
  <table class="table table-bordered table-striped ">
    <thead class="thead-dark">
      <th>Day</th>
      <th>Time</th>
    </thead>
    <tbody>
      <?php if($_SESSION['s_board']==2 and $_SESSION['s_grade']==8){?>
        <tr>
          <td>Monday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>8:00-8:45 pm</td>
        </tr>

      <?php }
     elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==9){?>
        <tr>
          <td>Thursday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>8:00-8:45 pm</td>
        </tr>

      <?php }
    elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==8){?>
        <tr>
          <td>Thursday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>8:00-8:45 pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>8:00-8:45 pm</td>
        </tr>

      <?php }  elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==6){?>
        <tr>
          <td>Monday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>7:15-8:00 pm</td>
        </tr>

      <?php } elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==7){?>
        <tr>
          <td>Monday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>7:15-8:00 pm</td>
        </tr>

      <?php } elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==4){?>
        <tr>
          <td>Thursday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>7:15-8:00 pm</td>
        </tr>

      <?php }  elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']==5){?>
        <tr>
          <td>Thursday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>7:15-8:00 pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>7:15-8:00 pm</td>
        </tr>

      <?php }
      elseif($_SESSION['s_board']==1 and $_SESSION['s_grade']=11){?>
        <tr>
          <td>Thursday</td>
          <td>2:00-2:45 pm</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>2:00-2:45 pm</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>2:00-2:45 pm</td>
        </tr>

      <?php } ?>


    </tbody>
  </table>
</div>

           </main>






<?php }
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
<?php require("../includes/footer.php");
