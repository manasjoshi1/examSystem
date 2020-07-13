<?php
require_once(dirname(__FILE__).'/config.php');

function your_filter($value) {
  $conn=$GLOBALS['conn'];
  $newVal = trim($value);
  $newVal = htmlspecialchars($newVal);
  $newVal = mysqli_real_escape_string($conn,$newVal);
  return $newVal;
}
if(isset($_POST['submit'])&&$_POST['submit']=='collectPaper'){

  $s_id=$_SESSION['s_id'];

foreach($_POST as $key => $value) {
  $_POST[$key] = your_filter($value);
}


$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = $_POST['p_id'].'_'.$s_id . '.' . end($temp);

$target_dir = "../collectedPaper/";

$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$file_type=$_FILES['fileToUpload']['type'];

if ($file_type=="application/pdf" ) {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {

 echo "The file ".$newfilename. " is uploaded";
 $p_id=$_POST['p_id'];
 $query="INSERT INTO `collected_paper` (`p_id`, `s_id`,  `cl_p_link`,  `p_submit_time`) VALUES
 ( '$p_id', '$s_id', '$newfilename', now());";
 $result=mysqli_query($conn,$query);
 if(!$result){
   echo $query;
   die("Mysqli_error".mysqli_error($conn));
 }
echo'<script>alert("Paper Successfully Submited")</script>';
echo "<script>window.open('../students/sIndex.php','_self' )</script>";
 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs<br>";

}




}





?>
