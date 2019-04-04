<?php
include('../resources/session.php');
include('../resources/styling.html');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Project Allocation System</title>
</head>
<body>
<?php include ('adminNavbar.php');?>
<?php
$sql = "SELECT ProjectIdeas, ProjectInterests FROM supervisors WHERE Id = '$id'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
	$projectIdeas = $row["ProjectIdeas"];
	$projectInterests = $row["ProjectInterests"];
}
$db->close();
if ($projectIdeas == null && $projectInterests == null) {
	include 'addProjectIdeas.php';
}else{
	include '../shared/currentIdeas.php';
}
?>

</body>
</html>