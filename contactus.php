<?php
if(isset($_POST['Submit'])){
    $to = "info@sugamsanskritam.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-finance-business.css">
    <link rel="stylesheet" href="css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
<link rel="stylesheet" href="css/forms.css">


</head>
<body>
<?php require("includes/nav3.php");?>




    <!-- Page Content -->

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Contact us  between 8:00 - 20:00 IST</p>
              <br>
              <a href="#">989-044-5925</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Feel free to contact us via mail any time </p>
              <br>
              <a href="#">info@sugamsanskritam.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>If you can also visit us at:</p>
              <br>
              <a href="#">Balaji Palace, Nashik</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit"name="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require("includes/footer.php");?>
