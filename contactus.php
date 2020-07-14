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

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" lang="en">
    <meta name="google-site-verification" content="A2anYa8q1pnEvG537I2viiBed5NkWcLpoPtAve4pFi0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="en_US" />
<meta property="og:title" content="Sugam Sanskritam | Making world Sanskritamay" />
<meta property="og:url" content="https://sugamsanskritam.com/" />
<meta property="og:site_name" content="Sugam Sanskritam | Making world Sanskritamay..." />
  <meta name="keywords" content=" Sanskrit, India,  Sanskritam, NGO , Sanskrut , Veda, Bharat ,Hindustan, Mantra, Shloka,Om, Relief ,sanskrit ganga,
sanskriti ias,
  sanskrit songs,
  sanskrit grammar,
  sanskrit language,
  sanskrit channel,
  sanskrit slokas,
  sanskriti,
  sanskrit class,
  sanskrit pedagogy,
  sanskrit alphabet,
  sanskrit anuvad,
  sanskrit aksharamala,
  sanskrit alphabet pronunciation,
  sanskrit anuvad class 10,
  sanskrit alankar,
  sanskrit avyay,
  sanskrit alphabet song,
  a sanskrit mantra for stress relief,
  a sanskrit grammar for students,
  a sanskrit shlok,
  sanskrit bhajan,
  sanskrit bhasha,
  sanskrit bharati,
  sanskrit baby girl names,
  sanskrit bhaktamar,
  sanskrit basics,
  sanskrit book,
  sanskrit by utkarsh classes,
  b.ed sanskrit,
  b.v.sanskrit,
  b.ed sanskrit lesson plan,
  b.a. sanskrit honours syllabus,
  b.a sanskrit question paper 2020,
  b.ed sanskrit syllabus,
  rpsc sanskrit b l choudhary,
  b.a sanskrit book,
  sanskrit class 10,
  sanskrit class 6,
  sanskrit class 10 chapter 1,
  sanskrit ctet,
  sanskrit class 6 chapter 1,
  sanskrit class 8 chapter 1,
  ctet sanskrit,
  sanskrit ganga ctet,
  sanskrit a b c d,
  ctet sanskrit class,
  ctet sanskrit pedagogy,
  sanskrit dhatu roop,
  sanskrit dictionary,
  sanskrit devotional songs,
  sanskrit dance,
  sanskrit dhoran 7,
  sanskrit dhoran 6,
  sanskrit dhoran 8,
  sanskrit darshan,
  d k gupta sanskrit,
  d.el.ed sanskrit 3rd sem,
  d.el.ed sanskrit,
  sanskrit education,
  sanskrit essay,
  sanskrit exam,
  sanskrit exampur,
  sanskrit exam 2020,
  sanskrit english,
  sanskrit edm,
  sanskrit easy learning,
  sanskrit a aa e ee,
  sanskrit e pathshala,
  e pg pathshala sanskrit,
  e school sanskrit,
  e learning sanskrit,
  sanskrit sambhashan e-warga,
  sanskrit for beginners,
  sanskrit for ctet,
  sanskrit for kids,
  sanskrit film,
  sanskrit for super tet,
  sanskrit for reet,
  sanskrit for beginners by ashok - day 1,
  sanskrit for class 6,
  sanskrit grammar class 10,
  sanskrit ganga channel,
  sanskrit ganga sarvagya bhushan,
  sanskrit grammar class 6,
  sanskrit ginti,
  sanskrit gyan ganga,
  g.k.& sanskrit classes,
  sanskrit guru g,
  sanskrit k kh g,
  sanskrit g.k question,
  sanskrit song,
  sanskrit hindi,
  sanskrit hanuman chalisa,
  sanskrit history,
  sanskrit house,
  sanskrit honours,
  sanskrit hindi anuvad,
  sanskrit hymns,
  sanskrit how to learn,
  h.s sanskrit suggestion 2020,
  h.s sanskrit,
  h.s sanskrit suggestion 2020 mcq,
  h.s sanskrit question 2019,
  h.s sanskrit question 2020,
  sanskriti kya h,
  h.s sanskrit grammar suggestion 2020,
  h.s sanskrit suggestion 2021,
  sanskrit in germany,
  sanskrit interview,
  sanskrit introduction,
  sanskrit in foreign countries,
  sanskrit in hindi,
  sanskrit in telugu,
  sanskrit in tamil,
  i learn sanskrit,
  sanskrit juktakkhor,
  sanskrit jokes,
  sanskrit jubani,
  sanskritjagat,
  sanskrit jagannath bhajan,
  sanskrit james school london,
  sanskrit job,
  sanskrit janmdin geet,
  j p sir sanskrit,
  sanskrit kaise sikhe,
  sanskrit karak,
  sanskrit ka,
  sanskrit ki shikshan vidhiyan,
  sanskrit kaise padhe,
  sanskrit ka paper,
  sanskrit ki ginti,
  sanskrit ke shlok,
  sanskrit k chand,
  sanskrit ka samas,
  sanskrit k karak,
  sanskrit ke question,
  sanskrit ke upsarg,
  sanskrit learning,
  sanskrit learning for beginners,
  sanskrit lessons,
  sanskrit language lessons for beginners,
  sanskrit lesson 1,
  sanskrit letters,
  sanskrit lakar,
  class 6 sanskrit l-1,
  sanskrit mein,
  sanskrit mantras,
  sanskrit mein ginti,
  sanskrit movie,
  sanskrit mein pakshiyon ke naam,
  sanskrit mein samas,
  sanskrit mein sandhi,
  sanskrit mein pratyay,
  t.m sanskrit classes,
  a m sanskrit classes,
  m.a sanskrit question paper,
  m a sanskrit,
  sanskrit m fruits name,
  m.a sanskrit entrance exam 2019,
  sanskrit m samas,
  m a sanskrit syllabus 1st year,
  sanskrit news,
  sanskrit numbers,
  sanskrit numbers 1 to 100,
  sanskrit ncert class 7,
  sanskrit ncert class 6,
  sanskrit news today,
  sanskrit numbers 1 to 10,
  sanskrit nibandh,
  vaidik sabhyata and sanskriti,
  sanskrit online class,
  sanskrit optional upsc,
  sanskrit online,
  sanskrit ok jhagda,
  sanskrit objective,
  sanskrit of class 6,
  sanskrit online class 10th,
  sanskrit of class 8,
  amma nanna o sanskriti,
  islamer itihas o sanskriti,
  bangalir bhasa o sanskriti,
  o p gupta sanskrit,
  sanskrit o aa,
  sanskrit o a,
  sanskrit paper,
  sanskrit pedagogy for ctet,
  sanskrit pratyay,
  sanskrit paper solution,
  sanskrit poem,
  sanskrit paper solution 2020,
  sanskrit pat panda,
  p sanskrit name for boy,
  p.b.srinivas sanskrit devotional songs,
  p g t sanskrit syllabus,
  p sharma sanskrit,
  sanskrit question,
  sanskrit question paper 2020 class 10,
  sanskrit quotes,
  sanskrit question paper,
  sanskrit quotes with meaning,
  sanskrit question answer class 10,
  sanskrit quiz,
  sanskrit question 2020,
  sanskrit rhymes,
  sanskrit reet level 2,
  sanskrit reet,
  sanskrit ringtone,
  sanskrit rap,
  sanskrit rangoli,
  sanskrit reet level 2 utkarsh classes,
  sanskrit rhymes for children,
  sanskrit shlok,
  sanskrit shikshan vidhiyan,
  sanskrit sandhi,
  sanskrit samas,
  sanskrit shlokas,
  sanskrit slokas for kids,
  h.s sanskrit question 2018,
  h.s sanskrit question 2016,
  s p tiwari sanskrit,
  sanskrit translation,
  sanskrit trance,
  sanskrit teaching,
  sanskrit tutorial,
  sanskrit teacher,
  sanskrit teaching method,
  sanskrit tattoo,
  sanskrit to hindi translation app,
  t g t sanskrit,
  sanskrit upsarg,
  sanskrit utkarsh,
  sanskrit university,
  sanskrit ucharan,
  sanskrit ucharan sthan,
  sanskrit uptet,
  sanskrit upsc,
  sanskrit university in mathura,
  shape of u sanskrit,
  education for u sanskrit,
  sanskrit vyakaran,
  sanskrit varnamala,
  sanskrit video,
  sanskrit vibhakti,
  sanskrit varg 3,
  sanskrit vandana,
  sanskrit vyakaran class 10,
  sanskrit varnamala song,
  kala v sanskriti,
  identity v sanskrit,
  class v sanskrit,
  brodha v sanskrit,
  samajik v sanskritik mudde,
  mugalkalin kala v sanskriti,
  bhartiya sabhyata sanskriti aur samaj,
  sanskrit words,
  sanskrit wala,
  sanskrit word meaning,
  sanskrit wifistudy,
  sanskrit word mala,
  sanskrit words meaning in english,
  sanskrit writing,
  sanskrit whatsapp status,
  sanskrit xii,
  sanskrit xth,
  class x sanskrit,
  class xii sanskrit,
  class x sanskrit chapter 1,
  xp classes sanskrit,
  class xii sanskrit suggestion 2020,
  class x sanskrit question paper,
  class x sanskrit seba,
  class x sanskrit sandhi,
  tedx sanskrit,
  legend x sanskriti,
  sanskriti x,
  sanskrit youtube channel,
  sanskrit yamunashtak,
  sanskrit yoga,
  sanskrit yogesh sir,
  sanskrit yoga song,
  sanskrit yushmad shabd,
  sanskrit yan sandhi,
  sanskrit youtube,
  sanskrit zubani,
  sanskrit zee news,
  sanskrit zero,
  deep prabha sanskrit zone,
  zerotoplus sanskrit cbse,
  zakir naik sanskrit,
  zubeen garg sanskrit song,
  sanskrit a to z,
  sanskrit class 01,
  sanskrit 10th class,
  sanskrit 10th class 1st lesson,
  sanskrit 12th class,
  sanskrit 10 class,
  sanskrit 10th class ssc new syllabus,
  sanskrit 10th class 1st lesson exercise,
  sanskrit 12,
  sanskrit 1st chapter,
  1 sanskrit mein,
  1 sanskrit shlok,
  class 1 sanskrit,
  reet level 1 sanskrit,
  chapter 1 sanskrit,
  ctet paper 1 sanskrit,
  part 1 sanskrit,
  lesson 1 sanskrit,
  sanskrit 2020,
  sanskrit 2nd chapter,
  sanskrit 2nd year lessons,
  sanskrit 2nd year,
  sanskrit 2019 question paper,
  sanskrit 2nd year important questions 2020,
  sanskrit 2nd lesson,
  sanskrit 2 chapter class 8,
  2 sanskrit shlok,
  class 2 sanskrit,
  chapter 2 sanskrit,
  part 2 sanskrit,
  sanskrit 3rd chapter,
  sanskrit 3rd semester,
  sanskrit 3rd class,
  sanskrit 3rd chapter class 7th,
  sanskrit 3rd semester btc,
  sanskrit 3rd lesson,
  sanskrit 3 semester,
  sanskrit 3rd sem,
  varg 3 sanskrit,
  class 3 sanskrit,
  varg 3 sanskrit syllabus,
  varg 3 sanskrit pedagogy,
  unacademy varg 3 sanskrit,
  chapter 3 sanskrit,
  part 3 sanskrit,
  sanskrit 4th class,
  sanskrit 4th chapter,
  sanskrit 4th lesson,
  sanskrit 4th chapter class 6,
  sanskrit 4 chapter class 8,
  sanskrit 4th chapter 7th class,
  bhaktamar stotra sanskrit 45,
  std 10 sanskrit 4,
  class 4 sanskrit,
  geeta adhyay 4 sanskrit,
  kaksha 4 sanskrit,
  chapter 4 sanskrit,
  kaksha 4 sanskrit piyusham,
  part 4 sanskrit,
  lesson 4 sanskrit,
  sanskrit 5th class,
  sanskrit 5th class song,
  sanskrit 5 class,
  sanskrit 5th class book,
  sanskrit 5th standard,
  sanskrit 5th chapter,
  sanskrit 5 minute crafts,
  sanskrit 5 lakar,
  5 sanskrit shlok,
  5 sanskrit mein falon ke naam,
  5 sanskrit mein pakshiyon ke naam,
  5 sanskrit mein pashu ke naam,
  5 sanskrit slokas on paropkar,
  5 sanskrit slokas,
  5 sanskrit mein phoolon ke naam,
  5 sanskrit suktiyan hindi arth sahit,
  sanskrit 6th class,
  sanskrit 6th class chapter 1,
  sanskrit 6 class,
  sanskrit 6th class chapter 2,
  sanskrit 6th class chapter 4,
  sanskrit 6th class chapter 3,
  sanskrit 6th,
  sanskrit 6 class chapter 1,
  6 sanskrit chapter 1,
  6 sanskrit chapter 3,
  6 sanskrit paper,
  6 sanskrit solution,
  6 sanskrit ruchira,
  6 sanskrit book,
  standard 6 sanskrit,
  ncert class 6 sanskrit,
  sanskrit 7th class chapter 1,
  sanskrit 7th class,
  sanskrit 7th class chapter 2,
  sanskrit 7 class chapter 1,
  sanskrit 7th class chapter 3,
  sanskrit 7 class,
  sanskrit 7th class chapter 4,
  sanskrit 7th,
  7 sanskrit paper,
  7 sanskrit chapter 1,
  7 sanskrit chapter 2,
  7 sanskrit paper solution,
  7 sanskrit book,
  7 sanskrit chapter 3,
  7 sanskrit chapter 4,
  7 sanskrit vandana,
  sanskrit 8th class,
  sanskrit 8th class chapter 1,
  sanskrit 8th class book,
  sanskrit 8th class chapter 2,
  sanskrit 8 class chapter 1,
  sanskrit 8 class,
  sanskrit 8th standard,
  sanskrit 8th class chapter 3,
  8 sanskrit chapter 1,
  8 sanskrit paper,
  8 sanskrit chapter 2,
  8 sanskrit paper solution,
  8 sanskrit grammar,
  8 sanskrit chapter 3,
  8 sanskrit solution,
  8 sanskrit paper 2020,
  sanskrit 9th class,
  sanskrit 9th class chapter 1,
  sanskrit 9th,
  sanskrit 9th class book,
  sanskrit 9th class chapter 2,
  sanskrit 9th standard,
  sanskrit 9th class chapter 3,
  sanskrit 9 class,
  9 sanskrit book,
  class 9 sanskrit,
  std 9 sanskrit,
  class 9 sanskrit grammar,
  standard 9 sanskrit,
  kalpataru class 9 sanskrit" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Sugam Sanskritam is India's one of the most proficient Sanskrit Learning Academy and has taught over 15000+ students." />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Sugam Sanskritam is India's one of the most proficient Sanskrit Learning Academy and has taught over 15000+ students." />
<meta name="twitter:title" content="Sugam Sanskritam | Making world Sanskritamay..." />
<title>Sugam Sanskritam</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


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
              <form id="contact" action="" method="post">
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
                      <button type="submit"name="Submit" id="form-submit" class="filled-button">Send Message</button>
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
