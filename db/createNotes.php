<?php
require_once(dirname(__FILE__).'/config.php');

function your_filter($value) {
  $conn=$GLOBALS['conn'];
  $newVal = trim($value);
  $newVal = htmlspecialchars($newVal);
  $newVal = mysqli_real_escape_string($conn,$newVal);
  return $newVal;
}
if(isset($_POST['submit'])&& $_POST['submit']=='addNotes'){


foreach($_POST as $key => $value) {
  $_POST[$key] = your_filter($value);
}


$query='select n_id from notes order by n_id desc limit 1';
$n_id='1';
$ok=1;
$result=mysqli_query($conn,$query);
if(!$result){
  die(mysqli_error($conn));
}
while($res=mysqli_fetch_assoc($result)){
  $n_id=$res['n_id']+1;
}
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = $n_id . '.' . end($temp);

$target_dir = "../createdNotes/";

$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$file_type=$_FILES['fileToUpload']['type'];

if ($file_type=="application/pdf" ) {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {

 echo "The file ".$newfilename. " is uploaded";

   $n_s_date=$_POST['n_title'];
   $g_id=strtok($_POST['g_id'], " ");
   $b_id=strtok($_POST['b_id'], " ");
   $board_id=strtok($_POST['board_id'], " ");
   $n_topic=$_POST['p_topic'];
   $n_id=$n_id.".pdf";

 $query="INSERT INTO `notes` (`n_title`, `g_id`, `board_id`, `b_id`, `n_topic`,`n_link`) VALUES
 ( '$n_s_date', $g_id, $board_id, $b_id,  '$n_topic','$n_id');";
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
