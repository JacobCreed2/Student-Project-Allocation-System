<?php
include('../resources/session.php');
$ideas = mysqli_real_escape_string($db,$_POST['editIdeas']);
if(isset($_POST["Interests"]) && is_array($_POST["Interests"])){
    $interests = implode(", ", $_POST["Interests"]);
    echo $interests;
}
$sql = "UPDATE supervisors SET ProjectIdeas = '$ideas', ProjectInterests = '$interests' WHERE Id = '$id'";
echo $sql;
if ($db->query($sql) === TRUE) {
  echo "New record created successfully\n";
  if ($_SESSION['UserType'] == 1) {
  	  header("Location: ../adminDashboard/projectIdeas.php");
  }else{
  	header("Location: ../supervisorDashboard/projectIdeas.php");
  }


} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>