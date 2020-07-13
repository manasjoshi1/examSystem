<?php

require_once(dirname(__FILE__).'/config.php');

if(isset($_POST['submit'])){
$ok=1;

  $ch_link=$_POST['cl_p_id'];
  $ch_marks=$_POST['ch_marks'];

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = $ch_link . '.' . end($temp);

$target_dir = "../checkedPaper/";

$target_file = $target_dir . $newfilename;
$uploadOk = 1;
$file_type=$_FILES['fileToUpload']['type'];

if ($file_type=="application/pdf" || $file_type=="image/jpg" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))

 {

 echo "The file ".$newfilename. " is uploaded";
 $query1="Insert into checked_paper (cl_p_id,ch_marks,ch_link,ch_upload) values($ch_link,$ch_marks,'$newfilename',now())";
 $result=mysqli_query($conn,$query1);
 if($result){

   $query2="select ch_p_id from checked_paper order by ch_p_id desc limit 1";
   $result2=mysqli_query($conn,$query2);
   while($row3=mysqli_fetch_assoc($result2)){
     $ch_id=$row3['ch_p_id'];
   }
   $query3="Update collected_paper set ch_id=$ch_id";
   $result3=mysqli_query($conn,$query3);
 }
 if(!$result2){
   die($query1.mysqli_error($conn));
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
