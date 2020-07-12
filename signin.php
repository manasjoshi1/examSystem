<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="css/signup.css">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from learning!</p>
                    </div>
                    <div class="col-md-9 register-right" >

                      <?php require_once(dirname(__FILE__).'/db/signin.php');?>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Login | Sugam Sanskritam </h3>
                                <form method="post">

                                <div class="row register-form">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <select name="type" class="form-control">
                                              <option value="1" selected>Student</option>
                                              <option value="2">Teacher</option>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password *"  />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit" value="Login"/>
                                    </div>
                                </div>
                              </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
