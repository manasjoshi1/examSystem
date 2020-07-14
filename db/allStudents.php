<?php
 require("config.php");

 function displayStudents(){
  $conn=$GLOBALS['conn'];

    $query ="select * from student order by s_grade desc";
    $queryExecute=mysqli_query($conn,$query);
    if(!$queryExecute){

      die(mysqli_error($conn));
    }
    if(mysqli_num_rows($queryExecute)>0){
      echo '<table class="table table-bordered table-striped tablesorter mytable">
      <thead align="center">
        <tr>
        <th style="padding-left:20px">UID</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Grade</th>
        <th>Action</th>
       </tr>
     </thead>
     <tbody>';

    while($row=mysqli_fetch_assoc($queryExecute))
    {

    $uid=$row['s_id'];
    $department=$row['s_name'];

    $username=$row['s_branch'];
    $email=$row['s_grade'];

    $status=$row['s_status'];



    // echo "<tr ><td style='padding-left:20px'>{$counter}</td>";
    if ($status == 1)
    {
    echo "<td>{$uid}</td>";
    echo "<td>{$department}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$email}</td>";

      // echo "<td><a href='editfundRaiser.php?department={$department}'  onclick='return confirm(".'"Are you sure?"'.");'>Edit</a></td></tr>";
      echo "<td><a href='../teachers/allStudents.php?id={$uid}&action=0'  onclick='return confirm(".'"Are you sure?"'.");'>Inactivate</a></td>";
      echo "<td><a href='../teachers/allStudents.php?id={$uid}&action=2'  onclick='return confirm(".'"Are you sure?"'.");'>Left</a></td></tr>";

    }
  }
    $queryExecute=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($queryExecute))
    {
      $uid=$row['s_id'];
      $department=$row['s_name'];

      $username=$row['s_branch'];
      $email=$row['s_grade'];

      $status=$row['s_status'];


    if ($status == 0)
    {
    echo "<tr  style='color: green'><td>{$uid}</td>";
    echo "<td>{$department}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$email}</td>";
    // echo "<td>Fund Raiser Closed</td>";
    echo "<td>New Member</td>";
    echo "<td><a href='../teachers/allStudents.php?id={$uid}&action=1'  onclick='return confirm(".'"Are you sure?"'.");'>Activate</a></td></tr>";
    }

  }

    $queryExecute=mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($queryExecute))
    {

      $uid=$row['s_id'];
      $department=$row['s_name'];

      $username=$row['s_branch'];
      $email=$row['s_grade'];

      $status=$row['s_status'];


    if ($status == 2)
    {
    echo "<tr  style='color: red'><td>{$uid}</td>";
    echo "<td>{$department}</td>";
    echo "<td>{$username}</td>";
    echo "<td>{$email}</td>";
    // echo "<td>Fund Raiser Closed</td>";
    echo "<td>Left</td>";
    echo "<td>-</a></td></tr>";
    }

  }
  echo '  </tbody>
     </table>';

  }
  else{
  echo "<div class='text-center'><h1>Alas, No students Found</h1><br>";


}
}
function inactiveStudent()
{
  $conn=$GLOBALS['conn'];
if (isset($_GET['id'])&&isset($_GET['action']))
{
  $eventID = $_GET['id'];
  $action = $_GET['action'];
  $query1 = "UPDATE student SET s_status={$action} where s_id='{$eventID}';";
  $queryUpdate = mysqli_query($conn, $query1);
  if (!$queryUpdate)
  {
    die("QueryFailed ".$query1 . mysqli_error($conn));
  }
  elseif($_GET['action']==1){
    $query ="select * from student where s_id='{$eventID}'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
    $to = $row['s_email']; // this is your Email address
    $from = "info@sugamsanskritam.com"; // this is the sender's Email address
    $first_name = $row['s_name'];
    $subject = "Sugam Sanskritam:  Activation Of Your Account ";
    $subject2 = "Copy of your form submission";
    $message = $first_name . "Your account has been Successfully activated" . "\n\n";
    $message2 = "Your account has been Successfully activated " . $first_name . "\n\n" ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}

  }
  header("Location: ../teachers/allStudents.php
");
}

}
