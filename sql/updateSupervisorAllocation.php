<?php 
include('../resources/session.php');
$supervisor = mysqli_real_escape_string($db,$_POST['selectsupervisor']);
$allocation = mysqli_real_escape_string($db,$_POST['allocation']);

$sql = "UPDATE supervisors SET MaxAllocation = '$allocation' WHERE Id = '$supervisor'";
if ($db->query($sql) === TRUE) {
	echo "record updated successfully\n";
	header('Location: ../adminDashboard/allSupervisors.php');

} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>