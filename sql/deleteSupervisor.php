<?php 
include('../resources/session.php');
$supervisor = mysqli_real_escape_string($db,$_POST['deleteId']);
if ($supervisor == $id) {
	echo "You can't delete your own user!";
}else{
    $sql1 = "DELETE FROM users WHERE SupervisorId = '$supervisor'";
    if ($db->query($sql1) === TRUE) {
      echo "Record deleted successfully\n";

    } else {
      echo "Error: " . $sql1 . "<br>" . $db->error;
    }
    $sql2 = "DELETE FROM supervisors WHERE Id = '$supervisor'";
    if ($db->query($sql2) === TRUE) {
      echo "Record deleted successfully\n";
      

    } else {
      echo "Error: " . $sql2 . "<br>" . $db->error;
    }
   	$sql = "UPDATE projects SET SupervisorId = '' WHERE supervisorId = '$supervisor'";
    if ($db->query($sql) === TRUE) {
      echo "record updated successfully\n";
      header('Location: ../adminDashboard/allSupervisors.php');

    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
}
$db->close();
 ?>