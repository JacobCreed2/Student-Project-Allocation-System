<?php 
include ('../resources/session.php');
include ('../sql/checkAllocation.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
$rowId = mysqli_real_escape_string($db,$_SESSION['rowId']);
$supervisorId = mysqli_real_escape_string($db,$id);

if ($currentAllocation < $maxAllocation) {
  $sql = "UPDATE projects SET Allocated = '1' WHERE StudentId = '$rowId'";
  if ($db->query($sql) === TRUE) {
    echo "Project updated successfully\n";

  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
  $sql1 = "UPDATE supervisors SET CurrentAllocation = CurrentAllocation + 1 WHERE Id = '$supervisorId'";
  if ($db->query($sql1) === TRUE) {
    echo "Supervisors updated\n";
    header('Location: ../adminDashboard/pendingProjects.php');

  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }
}elseif ($currentAllocation == $maxAllocation) {
  header('Location: ../adminDashboard/pendingProjects.php');
}
$db->close();
?>