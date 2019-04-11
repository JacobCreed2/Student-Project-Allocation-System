<?php 
include('../resources/session.php');
$supervisor = mysqli_real_escape_string($db,$_POST['adminId']);
echo $supervisor;
$sql = "UPDATE users SET UserTypeId = '1' WHERE SupervisorId = '$supervisor'";
if ($db->query($sql) === TRUE) {
	echo "record updated successfully\n";
	header('Location: ../adminDashboard/allSupervisors.php');

} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>