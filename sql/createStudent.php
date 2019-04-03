<?php
include ('../resources/config.php');

function selectId($db, $studentId){
  $select = "SELECT Id FROM students WHERE StudentId = '$studentId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["Id"];
    }
  } else {
    echo "0";
  }

  return $id;   
}

function checkStudentId($db, $studentId)
{
  $select = "SELECT StudentId FROM students WHERE StudentId = '$studentId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $checkStuId = $row["StudentId"];
    }
  } else {
    $checkStuId = null;
  }

  return $checkStuId;   
}

//if($_SERVER["REQUEST_METHOD"] == "POST") {
$firstName = mysqli_real_escape_string($db,$_POST['firstname']);
$lastName = mysqli_real_escape_string($db,$_POST['lastname']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$studentId = mysqli_real_escape_string($db,$_POST['studentid']);

$checkStuId = checkStudentId($db, $studentId);

if ($checkStuId == $studentId) {
  echo "Error SupervisorId already exsists please try again";
}else{
  $sql = "INSERT INTO students (FirstName, LastName, StudentId) VALUES ('$firstName', '$lastName', '$studentId')";
  if ($db->query($sql) === TRUE) {
    echo "New record added students successfully\n";

  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $hash = password_hash($password, PASSWORD_BCRYPT);
  echo $hash;

  $id = selectId($db, $studentId);

  $sql1 = "INSERT INTO users (Username, Password, UserTypeId, StudentId) VALUES ('$studentId', '$hash', '3', '$id')";
  echo $sql1;

  if ($db->query($sql1) === TRUE) {
    echo "New record added users successfully\n";

  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }

  $sql2 = "INSERT INTO projects (StudentId) VALUES ('$id')";

  if ($db->query($sql2) === TRUE) {
    header('Location: ../index.html');

  } else {
    echo "Error: " . $sql2 . "<br>" . $db->error;
  }

  $db->close();
}
?>