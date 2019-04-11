<?php
include('../resources/session.php');
$ideas = mysqli_real_escape_string($db,$_POST['ideas']);
if(isset($_POST["mytext"]) && is_array($_POST["mytext"])){
    $interests = implode(", ", $_POST["mytext"]);
    echo $interests;
}
$sql = "UPDATE supervisors SET ProjectIdeas = '$ideas', ProjectInterests = '$interests' WHERE Id = '$id'";
if ($db->query($sql) === TRUE) {
	echo "New record created successfully\n";
	    if ($_SESSION['UserType'] == 1) {
      header("Location: ../adminDashboard/currentProjects.php");
    }else{
      header("Location: ../supervisorDashboard/currentProjects.php");
    }

} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>