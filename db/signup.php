<?php class SignUp{
public function insertNewStudent($s_name, $s_school, $s_address, $s_board, $s_grade, $s_branch,$s_gender
  $s_email, $s_password, $s_phone,$s_q_number,$s_q_answer) {
      $conn=$GLOBALS['conn'];
      $s_password=password_hash($s_password, PASSWORD_BCRYPT);
      $s_q_answer=password_hash($s_q_answer, PASSWORD_BCRYPT);
      $query ="INSERT INTO newRegistration(s_name, s_school, s_address, s_board, s_grade, s_branch,s_gender
        s_email, s_password, s_phone,s_q_number,s_q_answer) VALUES(?,?,?,?,?,?,?,?,?)";
      $stmt=$conn->prepare($query);
      $stmt->bind_param("sssssssss",$s_name, $s_school, $s_address, $s_board, $s_grade, $s_branch,$s_gender
        $s_email, $s_password, $s_phone,$s_q_number,$s_q_answer);
      $result = $stmt->execute();
      $stmt->close();
      return json_encode($result);
    }
    public function getAllStudents(){
     $conn=$GLOBALS['conn'];

     $sql="SELECT * FROM student";
     $stmt = $conn->prepare($sql);
     if ($stmt->execute()) {
         $res = $stmt->get_result();
         $rows = array();
         while($r = mysqli_fetch_assoc($res)) {
             $rows[] = $r;
         }
         return json_encode($rows);
     }
     else{
         return NULL;
     }
 }
    public function getParticularStudent($email){
     $conn=$GLOBALS['conn'];
     $sql="SELECT * FROM student where email='{$email}'";
     $stmt = $conn->prepare($sql);
     if ($stmt->execute()) {
         $res = $stmt->get_result();
         $rows = array();
         while($r = mysqli_fetch_assoc($res)) {
             $rows[] = $r;
         }
         return json_encode($rows);
     }
     else{
         return NULL;
     }
 }

}
    ?>
