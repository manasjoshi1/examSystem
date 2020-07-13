<?php
    session_start();
    session_unset();
   (session_destroy()); // Destroying All Sessions {
    header("Location:signin.php");
    // Redirecting To Home Page
?>
