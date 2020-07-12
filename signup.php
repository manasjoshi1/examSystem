
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/signup.css">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""required/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from learning!</p>
                        <input type="submit" name="" value="Login"required/><brrequired/>
                    </div>
                    <div class="col-md-9 register-right">
                      <?php

                      require_once('db/student.php');
                      require_once('db/config.php');


                      if(isset($_POST['submit']) && $_POST['submit']=="Register"){
                        function your_filter($value) {
                          $conn=$GLOBALS['conn'];
                          $newVal = trim($value);
                          $newVal = htmlspecialchars($newVal);
                          $newVal = mysqli_real_escape_string($conn,$newVal);
                          return $newVal;
                        }
                        foreach($_POST as $key => $value) {
                          $_POST[$key] = your_filter($value);
                        }

                         $s_name=$_POST['s_name'];
                         $s_school=$_POST['s_school'];
                         $s_address=$_POST['s_address'];
                         $s_board=$_POST['s_board'];
                         $s_grade=$_POST['s_grade'];
                         $s_branch=$_POST['s_branch'];
                         $s_gender=$_POST['s_gender'];
                         $s_email=$_POST['s_email'];
                         $s_password=$_POST['s_password'];
                         $s_confirm_password=$_POST['s_confirm_password'];
                         $s_phone=$_POST['s_phone'];
                         $s_q_number=$_POST['s_q_number'];
                         $s_q_answer=$_POST['s_q_answer'];
                         $s_res_address=$_POST['s_res_address'];
                         if($s_password!=$s_confirm_password){
                           echo '<script>alert("Passwords Mismatch")</script>';
                           //echo '<script>window.open("signup.php","_self")</script>';
                           //exit();
                         }
                      $a = new student();
                      $a->insertNewStudent($s_name, $s_school, $s_address, $s_board, $s_grade, $s_branch,$s_gender,
                        $s_email, $s_password, $s_phone,$s_q_number,$s_q_answer,$s_res_address);
                      }
                      ?>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Sugam Sanskritam Registration Form</h3>
                                <form class="" action="" method="post" >

                                <div class="row register-form">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"maxlength="255" class="form-control" name="s_name" placeholder="Full Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="255" class="form-control" name="s_school" placeholder="School Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="255" class="form-control" name="s_address" placeholder="School Address *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                          <select name="s_board"class="form-control">
                                              <option value="1" selected>SSC</option>
                                              <option value="2">CBSE</option>
                                              <option value="3">ICSE</option>

                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <select name="s_grade" class="form-control">
                                              <option value="1" selected>5th</option>
                                              <option value="2">6th</option>
                                              <option value="3">7th</option>
                                              <option value="4">8th Full Sanskrit</option>
                                              <option value="4">8th Composite Sanskrit</option>
                                              <option value="5">9th Full Sanskrit</option>
                                              <option value="5">9th Composite Sanskrit</option>
                                              <option value="6">10th Full Sanskrit</option>
                                              <option value="6">10th Composite Sanskrit</option>
                                              <option value="7">11th</option>
                                              <option value="8">12th</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <select name="s_branch" class="form-control">
                                              <option value="1" selected>Pawan Nagar</option>
                                              <option value="2">Ashok Stambh</option>
                                              <option value="3">Indira Nagar</option>
                                              <option value="4">P And T Colony</option>
                                              <option value="5">Online Mode</option>
                                          </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="text"  maxlength="255"  class="form-control" name="s_res_address" placeholder="Your Address *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="s_gender" value="1" checked>
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="s_gender" value="2">
                                                    <span>Female </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email"  maxlength="255"  class="form-control" name="s_email" placeholder="Your Email *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" minlength="8" maxlength="32" class="form-control" name="s_password"placeholder="Password *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" minlength="8" maxlength="32"class="form-control" name="s_confirm_password" placeholder="Confirm Password *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="s_phone" class="form-control" placeholder="Your Phone *" value="" required/>
                                            <small  class="form-text text-muted">This number will be added to whatsapp</small>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="s_q_number">
                                                <option class="hidden"  selected disabled>Please select your Security Question</option>
                                                <option value="1">What is your Birthdate?</option>
                                                <option value="2">What is Your old Phone Number</option>
                                                <option value="3">What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <input type="text" maxlength="255" class="form-control" name="s_q_answer" placeholder="Enter Your Answer *" value="" required/>
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit" value="Register"required/>
                                    </div>

                                </div>
                              </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
<script href="js/index.js">

</script>
