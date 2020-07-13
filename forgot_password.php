<?php ob_start(); ?>

<?php
session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" lang="en">
    <meta name="google-site-verification" content="A2anYa8q1pnEvG537I2viiBed5NkWcLpoPtAve4pFi0" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SignUp | Sugam Sanskritam</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>



<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from learning!</p>
                        <a href="signin.php"><input type="submit" name="" value="Login"  required/></a>  <brrequired/>

                    </div>
                    <div class="col-md-9 register-right" >

                      <?php require_once(dirname(__FILE__).'/db/forgotPassword.php');?>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Forgot Password | Sugam Sanskritam </h3>

                                <form method="post">

                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="s_q_number">
                                                <option class="hidden"  selected disabled>Please select your Security Question</option>
                                                <option value="1">What is your Birthdate?</option>
                                                <option value="2">What is Your old Phone Number</option>
                                                <option value="3">What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Answer" placeholder="Answer *"  />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit" value="Reset"/>
                                    </div>
                                </div>
                              </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
