<?php
include ('../resources/config.php');

function checkSupervisorId($db, $supervisorId)
{
  $select = "SELECT SupervisorId FROM supervisors WHERE SupervisorId = '$supervisorId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $checkSupId = $row["SupervisorId"];
    }
  } else {
    $checkSupId = null;
  }

  return $checkSupId;   
}


function selectId($db, $supervisorId){
  $select = "SELECT Id FROM supervisors WHERE SupervisorId = '$supervisorId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["Id"];
    }
  } else {
    echo "No Id found";
  }

  return $id;   
}

//if($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = mysqli_real_escape_string($db,$_POST['firstname']);
$lastName = mysqli_real_escape_string($db,$_POST['lastname']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$supervisorId = mysqli_real_escape_string($db,$_POST['supervisorid']);
$maxAllocation = mysqli_real_escape_string($db,$_POST['allocation']);

$checkSupId = checkSupervisorId($db, $supervisorId);

if ($checkSupId == $supervisorId) {
  echo "Error SupervisorId already exsists please try again";
}else{

  $sql = "INSERT INTO supervisors (FirstName, LastName, SupervisorId, ProjectIdeas, ProjectInterests, CurrentAllocation, MaxAllocation) VALUES ('$firstName', '$lastName', '$supervisorId', '$ideas', '$interests', '0', '$maxAllocation')";
  if ($db->query($sql) === TRUE) {
    echo "New record created successfully\n";

  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $hash = password_hash($password, PASSWORD_BCRYPT);

  $id = selectId($db, $supervisorId);

  $sql1 = "INSERT INTO users (Username, Password, UserTypeId, SupervisorId) VALUES ('$supervisorId', '$hash', '2', '$id')";

  if ($db->query($sql1) === TRUE) {
    header('Location: ../adminDashboard/allSupervisors.php');

  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }

  $db->close();
}
?>