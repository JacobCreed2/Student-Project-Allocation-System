<?php
include ('./resources/config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $myusername = mysqli_real_escape_string($db,$_POST['username']);
  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
  
  $sql = "SELECT Id, UserTypeId FROM users WHERE Username = '$myusername' and Password = '$mypassword'";
  $result = mysqli_query($db,$sql);
  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $UserType = $row['UserTypeId'];
  
  
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
     $_SESSION['login_user'] = $myusername;

      switch ($UserType) {
      case '1':
        header("location: ./adminDashboard/adminDash.php");
        break;
      case '2':
        header("location: ./supervisorDashboard/supervisorDash.php");
        break;
      case '3':
        header("location: ./studentDashboard/studentDash.php");
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