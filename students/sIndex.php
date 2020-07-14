
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("../includes/nav.php");
    if ($_SESSION['userType']=='1') {


    ?>
    <main  role="main" class="container">
      <div class="ui segment">
  <p> Let's take a look at any upcoming exams... <a href="upComingExams.php">Exams✒</a> </p>
</div>
<div class="ui secondary segment">
  <p>There may be few notes waiting for you so that you can score great marks... <a href="viewNotes.php">Notes📖</a> </p>
</div>
<div class="ui tertiary segment">
  <p>Hey! Check wether your details with us are correct or not... <a href="viewUser.php?id=<?php echo $_SESSION['s_id'];?>">Profile😀</a> </p>
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
