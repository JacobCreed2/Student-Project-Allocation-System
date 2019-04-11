<?php 
include('../resources/session.php');
$student = mysqli_real_escape_string($db,$_POST['deleteId']);

$sql1 = "DELETE FROM users WHERE StudentId = '$student'";
if ($db->query($sql1) === TRUE) {
  echo "Record deleted successfully\n";

} else {
  echo "Error: " . $sql1 . "<br>" . $db->error;
}
$sql2 = "DELETE FROM students WHERE Id = '$student'";
if ($db->query($sql2) === TRUE) {
  echo "Record deleted successfully\n";


} else {
  echo "Error: " . $sql2 . "<br>" . $db->error;
}
$sql = "DELETE FROM projects WHERE studentId = '$student'";
if ($db->query($sql) === TRUE) {
  echo "record updated successfully\n";
  //header('Location: ../adminDashboard/allSupervisors.php');

} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>