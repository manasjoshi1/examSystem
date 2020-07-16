  <?php require("../db/config.php");?>
<?php require("../db/fileUpload.php");?>
<?php

$conn=$GLOBALS['conn'];

if(isset($_POST["action"]))
{
$output = '';
  $q="SELECT  * FROM collected_paper  where ch_id IS NULL order By p_id ";
  $res=mysqli_query($conn,$q);

if(mysqli_num_rows($res)>0){

$output.= '<table class="table table-bordered table-striped tablesorter">
<thead align="center">
<tr>
<th>Name</th>
<th>Grade</th>
<th>Branch</th>
<th>Paper Link</th>
<th>Upload</th>
<th>Marks</th>
<th>Submit</th>
</tr>
</thead>
<tbody>';
while($row=mysqli_fetch_assoc($res))
{
$cl_p_id=$row['cl_p_id'];
$qu="SELECT  * FROM student  where s_id=$row[s_id] ";
if(isset($_POST["g_id"]))
{
  $g_id = implode("','", $_POST['g_id']);
 $qu .= "
  AND s_grade IN('".$g_id."')
 ";


}
if(isset($_POST["b_id"]))
{
  $b_id = implode("','", $_POST['b_id']);
 $qu .= "
  AND s_branch IN('".$b_id."')
 ";

}
if(isset($_POST["board_id"]))
{
  $board_id = implode("','", $_POST['board_id']);
 $qu .= "
  AND s_board IN('".$board_id."')
 ";

}
$resu=mysqli_query($conn,$qu);
while($row2=mysqli_fetch_assoc($resu))
{
$output.= "<tr><td>{$row2['s_name']}</td>";
$output.= "<td>{$row2['s_grade']}</td>";
$output.= "<td>{$row2['s_branch']}</td>";
$output.= "<td><a href='../collectedPaper/$row[cl_p_link]' download>Download</a></td>";
$output.= "<td>
<form action='' method='post' enctype='multipart/form-data'>
             <div class='form-group'>
               <input type='file' class='' name='fileToUpload' id='fileToUpload'>
               <input type='hidden' class='' name='cl_p_id' value='$cl_p_id'>
               </div>

</td>";
$output.= "<td> <input type='text' class='form-control' name='ch_marks' required aria-describedby='emailHelp' placeholder='Marks Obtained'></td>";
$output.= "<td>  <button type='submit' name='submit' class='btn btn-info'>Add Paper</button>
</form>
</td></td>";



}

}
}
else {
  $output.="No Data Found";
}

echo $output;
}
?>
