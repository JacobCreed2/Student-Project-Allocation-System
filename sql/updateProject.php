<?php
include('../resources/session.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
$title = mysqli_real_escape_string($db,$_POST['editTitle']);
$details = mysqli_real_escape_string($db,$_POST['editDetails']);
$supervisor = mysqli_real_escape_string($db,$_POST['selectsupervisor']);
echo $supervisor;
$dateCreated = date("Y-m-d H:i:s");
$studentId = $id;

if ($supervisor == "noselection") {
  echo "No selection made";
}else{
    $sql = "UPDATE projects SET SupervisorId = '$supervisor', ProjectTitle = '$title', ProjectDetails = '$details', ProjectCreated = '$dateCreated' WHERE StudentId = '$studentId'";
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully\n";

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    $sql1 = "UPDATE rejectedprojects SET Resolved = '1' WHERE StudentId = '$studentId'";
    if ($db->query($sql1) === TRUE) {
      echo "New record created successfully\n";
      header('Location: http://localhost/student-project-allocation-system/studentDashboard/projects.php');

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
}
$db->close();
//}
?>