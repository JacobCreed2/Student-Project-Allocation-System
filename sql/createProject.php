<?php
include('../resources/session.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
$title = mysqli_real_escape_string($db,$_POST['title']);
$details = mysqli_real_escape_string($db,$_POST['details']);
$supervisor = mysqli_real_escape_string($db,$_POST['selectsupervisor']);
echo $supervisor;
$dateCreated = date("Y-m-d H:i:s");
$studentId = $id;

function findId($db,$studentId)
{
  $findId = "SELECT StudentId FROM projects WHERE StudentId = '$studentId'";

  $result = mysqli_query($db, $findId);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $stuId = $row["StudentId"];
      //echo $stuId;
    }
  } else {
    $stuId = null;
  }
  return $stuId;
}

$findID = findId($db,$studentId);

if ($supervisor == "noselection") {
  echo "No selection made";
}else{
    $sql = "UPDATE projects SET SupervisorId = '$supervisor', ProjectTitle = '$title', ProjectDetails = '$details', ProjectCreated = '$dateCreated' WHERE StudentId = '$studentId'";
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully\n";
      header("Location: ../studentDashboard/projects.php");

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
}
$db->close();
//}
?>