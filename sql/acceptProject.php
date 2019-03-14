<?php 
include ('../resources/session.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  $rowId = mysqli_real_escape_string($db,$_SESSION['rowId']);
  $supervisorId = mysqli_real_escape_string($db,$id);
  //echo $_SESSION['rowId'];
  echo $_SESSION['login_user'];
  echo $id;
  $sql = "UPDATE projects SET Allocated = '1' WHERE StudentId = '$rowId'";
if ($db->query($sql) === TRUE) {
    echo "Project updated successfully\n";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
  $sql1 = "UPDATE supervisors SET CurrentAllocation = CurrentAllocation + 1 WHERE Id = '$supervisorId'";
if ($db->query($sql1) === TRUE) {
    echo "Supervisors updated\n";

} else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
}

$db->close();
//echo "Hello";
?>