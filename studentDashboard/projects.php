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
	<?php
	$end = null;
	$currentTime = date("Y-m-d H:i:s");
	$sql = "SELECT ProjectTitle, ProjectDetails FROM projects WHERE StudentId = '$id'";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$projectTitle = $row["ProjectTitle"];
			$projectDetails = $row["ProjectDetails"];
		}
	}
	include '../sql/getDeadline.php';
	if ($currentTime < $Deadline) {
		if ($projectTitle == null) {
	//echo "Show add project";
			include ('newProject.php');
		}else{
	//echo "Show project";
			include ('../tables/displayStudentProjects.php');
		}
	}else{
		echo "<h1 class='text-danger'>The Deadline has passed for selecting a supervisor. If you haven't selected a supervisor you will be randomly allocated.</h1>";
		$end = 1;
		include ('../tables/displayStudentProjects.php');
	}
?>

</body>
</html>