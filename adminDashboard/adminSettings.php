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

<button type='button' class='btn btn-primary' onClick="window.location.href='runAllocation.php'">Start Allocation</button>

<form action="../sql/setDeadline.php" method="post">
	<input type="datetime-local" name="deadline">

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<h3>Current Deadline: <?php include '../sql/getDeadline.php'; echo $Deadline ?></h3>
<?php echo date_default_timezone_get(); ?>	


</body>
</html>