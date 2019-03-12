<?php
$studentId = $id; 
$sql = "SELECT supervisors.FirstName, supervisors.LastName, ProjectTitle, ProjectDetails FROM projects INNER JOIN supervisors ON projects.SupervisorId = supervisors.Id WHERE projects.StudentId = '$studentId'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container>"';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $supervisorFirst = $row["FirstName"];
        $supervisorLast = $row["LastName"];
        $projectTitle = $row["ProjectTitle"];
        $projectDetails = $row["ProjectDetails"];
    }
    echo "</div>";
} else {
    echo "0 results";
}
$db->close();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="h3">
			Project Title
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<?php 
			echo $projectTitle;
			?>
		</div>
	</div>
</div>
</body>
</html>