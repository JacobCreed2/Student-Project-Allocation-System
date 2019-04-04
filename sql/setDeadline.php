<?php
include('../resources/session.php');
$time = mysqli_real_escape_string($db,$_POST['deadline']);
echo $time;
$sql = "UPDATE adminsettings SET Deadline = '$time'";
if ($db->query($sql) === TRUE) {
	echo "New record created successfully\n";
	header("Location: ../adminDashboard/adminSettings.php");

} else {
	echo "Error: " . $sql . "<br>" . $db->error;
}
$db->close();
?>