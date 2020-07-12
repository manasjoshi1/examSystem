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
      echo "<script>window.open('../signup.php','_self' )</script>";
    }
      else{
        $passwordCorrect="";
        while($row=mysqli_fetch_assoc($runQuery)){
          $email=$row['s_email'];
          $usernameDB=$row['s_name'];
          $status=$row['s_status'];
          $passwordDB=$row['s_password'];

          $passwordCorrect = password_verify($password, $passwordDB);

          if($passwordCorrect){
            if($status==1){

              $_SESSION['username']=$usernameDB;
              $_SESSION['department']=$email;
              $_SESSION['last_time'] = time();

                echo "<script>window.open('main/index.php','_self' )</script>";
              }
              elseif($status==0){
                echo "<script>alert('You are not activated. Wait till your activation' )</script>";

                    echo "<script>window.open('../signin.php','_self' )</script>";
                  }
                  else{
                    echo "<script>alert('You are not a Member Anymore.' )</script>";

                    echo "<script>window.open('../../index.php','_self' )</script>";
                  }
                }
                else{
                  echo "<script>alert('Incorrect Credentials.. {$passwordCorrect}' )</script>";



                }
              }
            }

      if(!$runQuery)
       die("Query Fail " .mysqli_error($conn));


     }

  else
   {
    $table='teacher';
    $query="SELECT * FROM teacher where t_email='{$email}'";
    $runQuery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runQuery)==0){
      echo "<script>alert('This email does not exists please register.' )</script>";
      echo "<script>window.open('../signup.php','_self' )</script>";
    }
    else{
   $passwordCorrect="";
   while($row=mysqli_fetch_assoc($runQuery)){
    $email=$row['t_email'];
    $usernameDB=$row['t_name'];
    $status=$row['t_status'];
    $passwordCorrect=$row['t_password'];

     //$passwordCorrect = password_verify($password, $passwordDB);
     if($passwordCorrect){
     if($status==1){

      $_SESSION['username']=$usernameDB;
      $_SESSION['department']=$email;
      $_SESSION['uid']=$uid;
      $_SESSION['last_time'] = time();

              echo "<script>window.open('main/index.php','_self' )</script>";
      }
       elseif($status==0){
         echo "<script>alert('You are not activated. Wait till your activation' )</script>";

                 echo "<script>window.open('../signin.php','_self' )</script>";


       }
       else{
         echo "<script>alert('You are not a Member Anymore.' )</script>";

                 echo "<script>window.open('../../index.php','_self' )</script>";
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