<link rel="stylesheet" href="../css/forms.css">
<link rel="stylesheet" href="../css/fontawesome.css">

<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<nav class="navbar navbar-expand-md  fixed-top mynav" align="center">
<a class="navbar-brand" href="sIndex.php">Sugam Sanskritam</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav ml-auto ">
  <li class="nav-item active">
    <a class="nav-link" href="sIndex.php">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo $_SERVER['DOCUMENT_ROOT'].'/upComingExams.php'?>">Up Coming Exams</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="myResult.php">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="viewNotes.php">Notes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="../contactus.php">Contact us</a>
  </li>
</ul>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logoutModal">
  Logout
  </button>

</nav>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Are you sure <?php echo $_SESSION['username']?> ? </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-info" href="../logout.php">Logout</a>
      </div>
    </div>
  </div>
</div>
</div>
