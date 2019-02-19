<?php
include ('../resources/config.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = mysqli_real_escape_string($db,$_POST['firstname']);
  $lastName = mysqli_real_escape_string($db,$_POST['lastname']);
  $studentId = mysqli_real_escape_string($db,$_POST['studentid']);
  
  $sql = "INSERT INTO students (FirstName, LastName, StudentId) VALUES ('$firstName', '$lastName', '$studentId')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


$db->close();
//}
?>