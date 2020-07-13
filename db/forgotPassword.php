<?php
require_once(dirname(__FILE__).'/config.php');

$conn=$GLOBALS['conn'];

if(isset($_POST['submit']) && $_POST['submit']=="Reset"){

  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $s_q_answer=mysqli_real_escape_string($conn,$_POST['Answer']);
  $s_q_number=mysqli_real_escape_string($conn,$_POST['s_q_number']);

    $table='student';
    $query="SELECT s_q_number,s_q_answer FROM student where s_email='{$email}' ";
    $runQuery=mysqli_query($conn,$query);
    if(mysqli_num_rows($runQuery)==0){
      echo "<script>alert('This email does not exists please register.' )</script>";
      //echo "<script>window.open('../students/sIndex.php','_self' )</script>";
    }
      else{
        $passwordCorrect="";
        while($row=mysqli_fetch_assoc($runQuery)){
          if($s_q_number==$row['s_q_number']){
            $passwordDB=$row['s_q_answer'];
            $passwordCorrect = password_verify($s_q_answer, $passwordDB);
            if($passwordCorrect){


              ?>

              <form method="post">
              <div class="row register-form">
                  <div class="col-md-12">

                      <div class="form-group">
                          <input type="password" class="form-control" name="s_password" minlength=8 placeholder="Password *" value="" />
                          <input type="hidden" class="form-control" name="s_email" minlength=8 placeholder="Password *" value="<?php echo $email?>" />
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" name="s_confirm_password" minlength=8 placeholder="Confirm Password *"  />
                      </div>
                      <input type="submit" class="btnRegister" name="submit" value="Set"/>
                  </div>
              </div>
            </form>




              <?php


            }
            else{
              echo "<script>alert('Incorrect Answer' )</script>";
            //  echo "<script>window.open('forgot_password.php','_self' )</script>";


            }

          }
          else{
            echo "<script>alert('Incorrect Question Selection' )</script>";
          //  echo "<script>window.open('forgot_password.php','_self' )</script>";

          }}}}

          if(isset($_POST['submit']) && $_POST['submit']=="Set"){
            $s_password=$_POST['s_password'];
            $s_confirm_password=$_POST['s_confirm_password'];
            $email=$_POST['s_email'];
            if($s_password!=$s_confirm_password){
              echo '<script>alert("Passwords Mismatch")</script>';
              echo '<script>window.open("../forgot_password.php","_self")</script>';
              exit();
            }
            else{
              $s_password=password_hash($s_password, PASSWORD_BCRYPT);
              $query="Update student set s_password = '$s_password' where s_email='$email'";
              $res=mysqli_query($conn,$query);
              if($res){
                echo "Yo" ;
              }
              else{
                die(mysqli_error($conn));
              }
            }
          }

?>
