<?php
require_once(dirname(__FILE__).'/../db/config.php');
?>
<datalist id="branches">
<?php

$query="SELECT * from branch;";
$resultQuery=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($resultQuery)){
  $name=$row['b_name'];
  $id=$row['b_id'];
  echo "<option value='".$id." ".$name."'>";
}
echo "<option value='0 All'>";

?>
</datalist>
<datalist id="grades">
<?php
$query="SELECT * from grade;";
$resultQuery=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($resultQuery)){
  $name=$row['g_name'];
  $id=$row['g_id'];
  echo "<option value='".$id." ".$name."'>";
}
echo "<option value='0 All'>";

?>
</datalist>
<datalist id="boards">
<?php
$query="SELECT * from board;";
$resultQuery=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($resultQuery)){
  $name=$row['board_name'];
  $id=$row['board_id'];
  echo "<option value='".$id." ".$name."'>";
}
if(!$resultQuery){
  die(mysqli_error($conn));
}
echo "<option value='0 All'>";

?>
</datalist>
