<?php

require_once(dirname(__FILE__).'/config.php');

if(isset($_POST['submit'])){
$query='select p_id from paper order by p_id desc limit 1';
$p_id='';
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

if ($file_type=="application/pdf" || $file_type=="image/jpg" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {

 echo "The file ".$newfilename. " is uploaded";

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
