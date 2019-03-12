<?php
include ('../resources/config.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = mysqli_real_escape_string($db,$_POST['firstname']);
  $lastName = mysqli_real_escape_string($db,$_POST['lastname']);
  $studentId = mysqli_real_escape_string($db,$_POST['studentid']);
  
  $sql = "INSERT INTO students (FirstName, LastName, StudentId) VALUES ('$firstName', '$lastName', '$studentId')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully\n";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

$password = random_password();

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

$id = selectId($db, $studentId);

$sql1 = "INSERT INTO users (Username, Password, UserTypeId, StudentId) VALUES ('$studentId', '$password', '3', '$id')";

if ($db->query($sql1) === TRUE) {
    header('Location: ../adminDashboard/newStudent.php');

} else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
}

$db->close();
//}
?>