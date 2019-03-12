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

<?php    include('newStudent.php');?>

</body>
</html>