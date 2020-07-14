<?php
require_once(dirname(__FILE__).'/config.php');

function your_filter($value) {
  $conn=$GLOBALS['conn'];
  $newVal = trim($value);
  $newVal = htmlspecialchars($newVal);
  $newVal = mysqli_real_escape_string($conn,$newVal);
  return $newVal;
}
if(isset($_POST['submit'])&&$_POST['submit']=='addPaper'){

foreach($_POST as $key => $value) {
  $_POST[$key] = your_filter($value);
}


$query='select p_id from paper order by p_id desc limit 1';
$p_id=0;
$ok=1;
$result=mysqli_query($conn,$query);
if(!$result){
  die(mysqli_error($conn));
}
while($res=mysqli_fetch_assoc($result)){
  $p_id=$res['p_id']+1;
}
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = $p_id . '.' . end($temp);

$target_dir = "../createdPaper/";

$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$file_type=$_FILES['fileToUpload']['type'];

if ($file_type=="application/pdf" ) {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {

 echo "The file ".$newfilename. " is uploaded";

   $p_s_date=$_POST['p_s_date'];
   $p_s_time=$_POST['p_s_time'];
   $p_t_date=$_POST['p_e_date'];
   $p_t_time=$_POST['p_e_time'];
   $g_id=strtok($_POST['g_id'], " ");
   $b_id=strtok($_POST['b_id'], " ");
   $board_id=strtok($_POST['board_id'], " ");
   $p_max_marks=$_POST['p_max_marks'];
   $p_topic=$_POST['p_topic'];
   $p_id=$p_id.".pdf";

 $query="INSERT INTO `paper` (`p_date`, `p_s_time`, `p_e_date`, `p_e_time`, `g_id`, `board_id`, `b_id`, `p_max_marks`, `p_topic`,`p_link`) VALUES
 ( '$p_s_date', '$p_s_time', '$p_t_date', '$p_t_time', $g_id, $board_id, $b_id, $p_max_marks, '$p_topic','$p_id');";
 $result=mysqli_query($conn,$query);
 if(!$result){
   echo $query;
   die("Mysqli_error".mysqli_error($conn));
 }

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

// Check if image file is a actual image or fake image




}





?>
