<?php
include ('./resources/config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $formUsername = mysqli_real_escape_string($db,$_POST['username']);
  $formPassword = mysqli_real_escape_string($db,$_POST['password']); 
  
  $sql = "SELECT Id, UserTypeId, Password FROM users WHERE Username = '$formUsername'";
  $result = mysqli_query($db,$sql);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $_SESSION['UserType'] = $row['UserTypeId'];
  $password = $row['Password'];
  
  
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row

  if(password_verify($formPassword, $password)) {
     $_SESSION['login_user'] = $formUsername;

      switch ($_SESSION['UserType']) {
      case '1':
        header("location: ./adminDashboard/adminDash.php");
        break;
      case '2':
        header("location: ./supervisorDashboard/pendingProjects.php");
        break;
      case '3':
        header("location: ./studentDashboard/projects.php");
        break;
      
      default:
        header("location: index.html");
        echo "UserType Unknown";
        break;
    }
  }else {
     $error = "Your Login Name or Password is invalid";
     echo $error;
     echo "\n <a href='http://localhost/student-project-allocation-system'> Click here to return to login </a>";
  }

}
?>