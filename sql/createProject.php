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
  if (empty($findID)) {
    $sql = "INSERT INTO projects (StudentId, SupervisorId, ProjectTitle, ProjectDetails, ProjectCreated) VALUES ('$studentId', '$supervisor', '$title', '$details', '$dateCreated')";
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully\n";

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
  }else {
    echo "Only one project per student";
  }
}
$db->close();
//}
?>