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
<h1>All Supervisors</h1>
<?php include ('../sql/getStudentsbyAllocation.php'); ?>
<h2>Students / Avaliable Allocation: <?php echo $count;  ?>/<?php echo $totalAllocation;  ?></h2>
<table id="projects" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Supervisor</th>
                <th>SupervisorId</th>
                <th>UserType</th>
                <th>CurrentAllocation</th>
                <th>MaxAllocation</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('../tables/displayAllSupervisors.php');
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Supervisor</th>
                <th>SupervisorId</th>
                <th>UserType</th>
                <th>CurrentAllocation</th>
                <th>MaxAllocation</th>
                <th>Options</th>
            </tr>
        </tfoot>
</table>
<script>
	    $('#projects').DataTable( {
    } );
</script>
<?php include 'setSupervisorModal.php'; ?>
</body>
</html>