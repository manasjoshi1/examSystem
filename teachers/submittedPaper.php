<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <?php require("../includes/head-tag.php");?>

    <link rel="stylesheet" href="../css/forms.css">

<style media="screen">

.slide-image {
  width: 100%;
}

.carousel-holder {
  margin-bottom: 30px;
}

.carousel-control,
.item {
  border-radius: 4px;
}

.caption {
  height: 160px;
  overflow: hidden;
}

.caption h4 {
  white-space: nowrap;
}

.thumbnail img {
  width: 100%;
}

.ratings {
  padding-right: 10px;
  padding-left: 10px;
  color: #d17581;
}

.thumbnail {
  padding: 0;
}

.thumbnail .caption-full {
  padding: 9px;
  color: #333;
}

footer {
  margin: 50px 0;
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  </head>
  <body>
    <?php require("../includes/nav2.php");
    require("../db/config.php");
    $conn=$GLOBALS['conn'];
    if ($_SESSION['userType']=='2') {}

    ?>

    <div class="container">
        <div class="row">
         <br />
         <br />
            <div class="col-md-3">
    <div class="list-group">



                     <h3>Board</h3>
                                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">




                     <?php

                                    $query = "SELECT DISTINCT(board_id),board_name FROM board";
                                  $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector board" value="<?php echo $row['board_id']; ?>"  > <?php echo $row['board_name']; ?></label>
                                    </div>
                                    <?php
                                    }

                                    ?>
                                    </div>
                                </div>
                    <div class="list-group">
                     <h3>Branch</h3>
                     <?php

                                    $query = "SELECT DISTINCT(b_id),b_name FROM branch";
                                  $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector branch" value="<?php echo $row['b_id']; ?>"  > <?php echo $row['b_name']; ?></label>
                                    </div>
                                    <?php
                                    }

                                    ?>
                                </div>
                    <div class="list-group">
                     <h3>Grade</h3>
                     <?php

                                    $query = "SELECT DISTINCT(g_id),g_name FROM grade";
                                  $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <div class="list-group-item checkbox">

                                        <label><input type="checkbox" class="common_selector grade" value="<?php echo $row['g_id']; ?>"  > <?php echo $row['g_name']; ?></label>
                                    </div>
                                    <?php
                                    }

                                    ?>
                                </div>
                                </div>


            <div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
        </div>
      </div>



  </body>
</html>
<style>
#loading
{
 text-align:center;
 background: url('loader.gif') no-repeat center;
 height: 150px;
}
</style>
<script>
$(document).ready(function(){

filter_data()
      function filter_data()
      {
          $('.filter_data').html('<div id="loading" style="" ></div>');
          var action = 'fetch_data';
          var branch = get_filter('branch');
          var grade = get_filter('grade');
          var board = get_filter('board');
          $.ajax({
              url:"submittedAjax.php",
              method:"POST",
              data:{action:action, b_id:branch, g_id:grade, board:board},
              success:function(data){
                  $('.filter_data').html(data);
              }
          });
      }


    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });



});
</script>

 <?php //require("../includes/footer.php");?>
