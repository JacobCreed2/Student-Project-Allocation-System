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
<?php include ('studentNavbar.php'); ?>
<script>
document.getElementById("Projects").style.color = "white";
</script>
<?php
$studentId = $id;
$sql = "SELECT ProjectTitle, ProjectDetails FROM projects WHERE StudentId = '$studentId'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$projectTitle = $row["ProjectTitle"];
		$projectDetails = $row["ProjectDetails"];
	}
}
if ($projectTitle == null) {
	//echo "Show add project";
	include ('newProject.php');
}else{
	//echo "Show project";
	include ('../tables/displayStudentProjects.php');
}
?>

</body>
</html>