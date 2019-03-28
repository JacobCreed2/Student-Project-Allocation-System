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
	include ('../tables/displayStudentProjects.php');
?>

</body>
</html>