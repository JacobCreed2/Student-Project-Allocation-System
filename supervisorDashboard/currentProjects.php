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
<h1>Projects Currently Allocated</h1>
<h3>Remaining Allocation: <span class="text-nowrap text-info"><?php include '../shared/currentAllocation.php'; ?></span></h3>
<table id="projects" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('../tables/displayCurrentProjects.php');
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Student</th>
                <th>Project Title</th>
                <th>Project Description</th>
            </tr>
        </tfoot>
</table>
<script>
	    $('#projects').DataTable( {
            'searching': false
    } );
</script>
<?php include('../shared/rejectAllocProjectForm.php');?>
</body>
</html>