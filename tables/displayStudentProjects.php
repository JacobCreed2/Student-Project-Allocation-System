<?php
$allocated = null;
$studentId = $id;
$sql = "SELECT ProjectTitle, ProjectDetails, rejectedprojects.StudentId, rejectedprojects.SupervisorId, rejectedprojects.Reason, rejectedprojects.Resolved FROM projects INNER JOIN rejectedprojects ON rejectedprojects.StudentId = projects.StudentId WHERE projects.StudentId = '$studentId'";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
	$projectTitle = $row["ProjectTitle"];
	$projectDetails = $row["ProjectDetails"];
	$rejectStudentId = $row["StudentId"];
	$rejectSupervisorId = $row["SupervisorId"];
	$reason = $row["Reason"];
	$resolved = $row["Resolved"];
}
if (!empty($rejectStudentId) && $resolved == '0') {
	$sql1 = "SELECT FirstName, LastName FROM supervisors INNER JOIN rejectedprojects ON rejectedprojects.SupervisorId = supervisors.Id WHERE rejectedprojects.StudentId = '$studentId'";
	$result = $db->query($sql1);
	while($row = $result->fetch_assoc()) {
		$supervisorFirst = $row["FirstName"];
		$supervisorLast = $row["LastName"];
	}
	include ('displayRejectedProject.php'); 
}else if (empty($rejectStudentId) || $resolved == '1') {
	$sql = "SELECT ProjectTitle, ProjectDetails, Allocated, supervisors.FirstName, supervisors.LastName FROM projects INNER JOIN supervisors ON projects.SupervisorId = supervisors.Id WHERE projects.StudentId = '$studentId'";
	$result = $db->query($sql);
	while($row = $result->fetch_assoc()) {
		$projectTitle = $row["ProjectTitle"];
		$projectDetails = $row["ProjectDetails"];
		$supervisorFirst = $row["FirstName"];
		$supervisorLast = $row["LastName"];
		$allocated = $row["Allocated"];
	}
	include ('displayProject.php');
}
$db->close();
?>
