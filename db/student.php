<?php
require_once(dirname(__FILE__).'/config.php');
class student{
public function insertNewStudent($s_name, $s_school, $s_address, $s_board, $s_grade, $s_branch,$s_gender
  ,$s_email, $s_password, $s_phone,$s_q_number,$s_q_answer,$s_res_address) {

    $alreadyExists= getParticularStudent($s_email);
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

      $conn=$GLOBALS['conn'];
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
    public function getAllStudents(){
     $conn=$GLOBALS['conn'];

     $sql="SELECT * FROM student";
     $stmt = $conn->prepare($sql);
     if ($stmt->execute()) {
         $res = $stmt->get_result();
         $rows = array();
         while($r = mysqli_fetch_assoc($res)) {
             $rows[] = $r;
         }
         return json_encode($rows);
     }
     else{
         return NULL;
     }
 }
}
     function getParticularStudent($email){
       $conn=$GLOBALS['conn'];
       $query="SELECT * FROM student where s_email='{$email}'";
     	 $runQuery=mysqli_query($conn,$query);
     	 if(!$runQuery)
     		die("Query Fail " .mysqli_error($conn));
     	$passwordCorrect="";
     	while($row=mysqli_fetch_assoc($runQuery)){
     		$departmentdb=$row['department'];
     		$usernameDB=$row['username'];
     		$uidDB=$row['uid'];
     		$passwordDB=$row['password'];
     		$status=$row['status'];

         $passwordCorrect = password_verify($password, $passwordDB);
         if($passwordCorrect){
         if($status==1){



       		$_SESSION['username']=$usernameDB;
       		$_SESSION['department']=$departmentdb;
       		$_SESSION['uid']=$uid;
           $_SESSION['last_time'] = time();

       		$sessName=$_SESSION['username'];
       		$sessDept=$_SESSION['department'];

       		      	echo "<script>window.open('main/index.php','_self' )</script>";
       		}
           elseif($status==0){
             echo "<script>alert('You are not activated. Yow will get a mail of activation' )</script>";

                     echo "<script>window.open('main/index.php','_self' )</script>";


           }
           else{
             echo "<script>alert('You are not a Member Anymore.' )</script>";

                     echo "<script>window.open('../../index.php','_self' )</script>";
           }
         }
           else{
             echo "<script>alert('Incorrect Credentials' )</script>";


           }



     $sql="SELECT * FROM student where email='{$email}'";
     $result=mysqli_query($conn,$query);
     $rows = array();

     if(mysqli_num_rows($result)>0){
       while($r = mysqli_fetch_assoc($result)) {

       $rows[] = $r;
     }
       return json_encode($rows);


     }
     else{
       return 1;
     }
 }

}
    ?>
