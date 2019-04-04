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
<h1>Rejected Projects</h1>
<table id="projects" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
                <th>Reason</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('../tables/displayRejectedProjects.php');
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
                <th>Reason</th>
            </tr>
        </tfoot>
</table>
<script>
	    $('#projects').DataTable( {
    } );
</script>
</body>
</html>