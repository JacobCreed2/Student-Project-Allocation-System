<?php
   include('../resources/session.php');
   include('../resources/styling.html');
?>
<form method="get" action="../adminDashboard/allProjects.php">
    <button type="submit">Back to Projects</button>
</form>
<?php 
exec("java -jar ../Netbeans/studentprojectallocationsystem/dist/studentprojectallocationsystem.jar", $output);
print_r($output);
//header("Location: ../adminDashboard/allProjects.php");
 ?>
