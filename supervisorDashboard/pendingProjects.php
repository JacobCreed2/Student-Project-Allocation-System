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
<?php include ('supervisorNavbar.php'); ?>
<h1>Pending Projects</h1>
<table id="projects" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('../tables/displayPendingProjects.php');
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
                <th>Options</th>
            </tr>
        </tfoot>
</table>
<script>
	    $('#projects').DataTable( {
    } );
</script>
<?php include('../shared/rejectProjectForm.php'); ?>
</body>
</html>