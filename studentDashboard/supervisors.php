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
<h1>Supervisor Projects</h1>
<table id="projects" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Supervisor</th>
                <th>Project Ideas</th>
                <th>Project Interests</th>
                <th>CurrentAllocation</th>
                <th>MaxAllocation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ('../tables/displayAllSupervisorIdeas.php');
             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Supervisor</th>
                <th>Project Ideas</th>
                <th>Project Interests</th>
                <th>CurrentAllocation</th>
                <th>MaxAllocation</th>
            </tr>
        </tfoot>
</table>
<script>
	    $('#projects').DataTable( {
    } );
</script>
</body>
</html>