<?php
require_once(dirname(__FILE__).'/config.php');
class student{
public function insertNewStudent($s_name, $s_school, $s_address, $s_board, $s_grade, $s_branch,$s_gender
  ,$s_email, $s_password, $s_phone,$s_q_number,$s_q_answer,$s_res_address) {
    $conn=$GLOBALS['conn'];

    $sql="SELECT * FROM student where s_email='{$s_email}'";
    $result=mysqli_query($conn,$sql);
    $rows = array();
    if(!$result){
      die(mysqli_error($conn));
    }
    $alreadyExists=0;
    if(mysqli_num_rows($result)>0){
      $alreadyExists=1;
    }
    if(strlen($s_password)<8)
    {
      echo '<script>alert("Password must be of 8 charachters")</script>';
      echo '<script>window.open("signup.php","_self")</script>';
      exit();
    }
    if($alreadyExists!=0){
      echo '<script>alert("Email Already Exists, please try again")</script>';
            echo '<script>window.open("signup.php","_self")</script>';
            exit();

    }
else {

    $s_password=password_hash($s_password, PASSWORD_BCRYPT);
    $s_q_answer=password_hash($s_q_answer, PASSWORD_BCRYPT);

      $query ="INSERT INTO student(s_name, s_school, s_address, s_board, s_grade, s_branch,s_gender,
        s_email, s_password, s_phone,s_q_number,s_q_answer,s_res_address) VALUES('$s_name', '$s_school', '$s_address', $s_board, $s_grade, $s_branch,$s_gender
        ,'$s_email', '$s_password', '$s_phone',$s_q_number,'$s_q_answer','$s_res_address');";
      $result=mysqli_query($conn,$query);
      if($result){
        echo '<script>confirm("Congratulations '.$s_name.'. Once account is activated you will get a mail")</script>';
    //    echo '<script>window.open("signin.php","_self")</script>';

      }
      else{
     die("Query Failed" .mysqli_error($conn));
     echo '<script>window.open("signup.php","_self")</script>';
      }
    }

    }

 }


    ?>
