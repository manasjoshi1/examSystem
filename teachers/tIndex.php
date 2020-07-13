<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <?php require("../includes/head-tag.php");?>

  </head>
  <body>
    <?php require("../includes/nav2.php");
    if ($_SESSION['userType']=='2') {

    ?>
    <main  role="main" class="container">

      <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"> <a href="#">Upcoming Exams</a> </div>
        <div class="card-body text-primary">
          <h5 class="card-title">Topic</h5>
          <p class="card-text">sad</p>
        </div>
      </div>
      <!-- Begin Page Content -->
       <div class="container-fluid">
         <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
         </div>

         <!-- Content Row -->
         <div class="row">

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Events (Monthly)</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
               <div class="card-body">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                     <div class="row no-gutters align-items-center">
                       <div class="col-auto">
                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                       </div>
                       <div class="col">
                         <div class="progress progress-sm mr-2">
                           <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           </main>


  </body>
</html>
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
}
 ?>
