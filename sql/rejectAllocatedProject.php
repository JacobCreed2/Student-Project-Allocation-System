<?php 
include ('../resources/session.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  $rowId = mysqli_real_escape_string($db,$_SESSION['rowId']);//rowId is stored in the session. It's just the student ID. 
  $supervisorId = mysqli_real_escape_string($db,$id);// supevisor Id from the session.
  $projectId = mysqli_real_escape_string($db,$_SESSION['projectId']);// project Id stored in the session 
  $reason = mysqli_real_escape_string($db,$_POST['reason']);// reason for rejecting the project. Posted from the form.
  //echo $_SESSION['rowId'];
  echo $_SESSION['login_user'];
  echo $id;
  $sql = "INSERT INTO rejectedprojects (StudentId, SupervisorId, ProjectId, Reason, Resolved) VALUES ('$rowId', '$supervisorId', '$projectId', '$reason', '0')";// inserts reason into rejected projects
if ($db->query($sql) === TRUE) {
    echo "Project updated successfully\n";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
  $sql1 = "UPDATE projects SET SupervisorId = null, Allocated = '0' WHERE StudentId = '$rowId'";
if ($db->query($sql1) === TRUE) {
    echo "Project updated successfully\n";

} else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
}
  $sql2 = "UPDATE supervisors SET CurrentAllocation = CurrentAllocation - 1 WHERE Id = '$supervisorId'";
if ($db->query($sql2) === TRUE) {
    echo "Supervisors updated\n";
    header('Location: ../adminDashboard/currentProjects.php');

} else {
    echo "Error: " . $sql2 . "<br>" . $db->error;
}
$db->close();
//echo "Hello";
?>