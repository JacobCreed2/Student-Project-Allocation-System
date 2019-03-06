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

function checkUsername($firstName) {
$firstInitial =  substr($firstName,0,1);

$userName = ($firstInitial . $lastName);
echo $userName;

    $checkUsername = "SELECT Username FROM users WHERE Username = '$userName'";
    $result = mysqli_query($db,$checkUsername);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $name = $row['Username'];

  return $name;
}

$usernameExsists = checkUsername($firstName);

$selectId = "SELECT Id FROM students WHERE FirstName = '$firstName'";

if (empty($name)) {
  $insert = "INSERT INTO users (Username,Password) VALUES ('$Username, $password, 3, $selectId')";
}

$password = random_password(8);

echo $name;
    // execute the prepared statement
    // while($row=$result->fetch()){ 
    //   $ID = $row['RandID'];
    // }
    // if (empty($ID)) {
    //   $ID = "No RandID";
    // }

$db->close();
//}
?>