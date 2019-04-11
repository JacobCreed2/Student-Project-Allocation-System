<?php
include('../resources/session.php');
$title = mysqli_real_escape_string($db,$_POST['title']);
$details = mysqli_real_escape_string($db,$_POST['details']);
$supervisor = mysqli_real_escape_string($db,$_POST['selectsupervisor']);
//echo $supervisor;
$dateCreated = date("Y-m-d H:i:s");

function checkAllocation($db,$supervisor)
{
  $findId = "SELECT CurrentAllocation, MaxAllocation FROM supervisors WHERE Id = '$supervisor'";

  $result = mysqli_query($db, $findId);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $current = $row['CurrentAllocation'];
      $max = $row['MaxAllocation'];
    }
  }
  if ($current < $max) {
    $check = 1;
  }elseif ($current == $max) {
    $check = 0;
  }
  return $check;
}

$check = checkAllocation($db,$supervisor);
//echo "Check: " . $check;

if ($supervisor == "noselection") {
  echo "No selection made";
}else{
  if ($check == 1) {
    $sql = "UPDATE projects SET SupervisorId = '$supervisor', ProjectTitle = '$title', ProjectDetails = '$details', ProjectCreated = '$dateCreated' WHERE StudentId = '$id'";
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully\n";
      header("Location: ../studentDashboard/projects.php");

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
  }elseif ($check == 0) {
    echo "Supervisor full. Please return to the previous page and select another supervisor";
  }
}
$db->close();
?>