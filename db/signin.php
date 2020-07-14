<?php
require_once(dirname(__FILE__).'/config.php');

$conn=$GLOBALS['conn'];

if(isset($_POST['submit']) && $_POST['submit']=="Login"){

  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);

  if($_POST['type']==1){
    $table='student';
    $query="SELECT * FROM student where s_email='{$email}' ";
    $runQuery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runQuery)==0){
      echo "<script>alert('This email does not exists please register.' )</script>";
      echo "<script>window.open('signin.php','_self' )</script>";
    }
      else{
        $passwordCorrect="";
        while($row=mysqli_fetch_assoc($runQuery)){
          $email=$row['s_email'];
          $s_id=$row['s_id'];
          $usernameDB=$row['s_name'];
          $status=$row['s_status'];
          $passwordDB=$row['s_password'];
          $board=$row['s_board'];
          $branch=$row['s_branch'];
          $grade=$row['s_grade'];

          $passwordCorrect = password_verify($password, $passwordDB);

          if($passwordCorrect){
            if($status==1){

              $_SESSION['username']=$usernameDB;
              $_SESSION['department']=$email;
              $_SESSION['s_board']=$board;
              $_SESSION['s_id']=$s_id;
              $_SESSION['s_branch']=$branch;
              $_SESSION['s_grade']=$grade;
              $_SESSION['userType']='1';
              $_SESSION['last_time'] = time();
              //die(print_r($_SESSION));

                echo "<script>window.open('students/sIndex.php','_self' )</script>";
              }
              elseif($status==0){
                echo "<script>alert('You are not activated. Wait till your activation' )</script>";

                    echo "<script>window.open('signin.php','_self' )</script>";
                  }
                  else{
                    echo "<script>alert('You are not a Member Anymore.' )</script>";

                    echo "<script>window.open('index.php','_self' )</script>";
                  }
                }
                else{
                  echo  '<div class="alert alert-danger" role="alert">
                  Incorrect Credentials<br>!
                    </div>';




                }
              }
            }

      if(!$runQuery)
       die("Query Fail " .mysqli_error($conn));


     }

  else if($_POST['type']==2)
   {
    $table='teacher';
    $query="SELECT * FROM teacher where t_email='{$email}'";
    $runQuery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runQuery)==0){
      echo "<script>alert('This email does not exists please register.' )</script>";
      echo "<script>window.open('signup.php','_self' )</script>";
    }
    else{
   $passwordCorrect="";
   while($row=mysqli_fetch_assoc($runQuery)){
    $email=$row['t_email'];
    $usernameDB=$row['t_name'];
    $status=$row['t_status'];
    $passwordDB=$row['t_password'];

     $passwordCorrect = password_verify($password, $passwordDB);
     if($passwordCorrect){
     if($status==1){

      $_SESSION['username']=$usernameDB;
      $_SESSION['department']=$email;
      $_SESSION['userType']=2;
      $_SESSION['last_time'] = time();
              echo "<script>window.open('teachers/tIndex.php','_self' )</script>";
      }
       elseif($status==0){
         echo "<script>alert('You are not activated. Wait till your activation' )</script>";

                 echo "<script>window.open('signin.php','_self' )</script>";


       }
       else{
         echo "<script>alert('You are not a Member Anymore.' )</script>";

                 echo "<script>window.open('index.php','_self' )</script>";
       }
     }
       else{
         echo "<script>alert('Incorrect Credentials' )</script>";


       }
       }
       }

    if(!$runQuery)
     die("Query Fail " .mysqli_error($conn));


  }
  }


?>
