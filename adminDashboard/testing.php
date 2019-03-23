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
<?php include ('adminNavbar.php'); ?>
<script>
document.getElementById("Students").style.color = "white";
</script>

<button type='button' class='btn btn-primary' onClick="window.location.href='../testing/recreateProjects.php'">Reset Projects Table</button>
<button type='button' class='btn btn-primary' onClick="window.location.href='../testing/recreateSupervisors.php'">Reset Supervisors Table</button>

</body>
</html>