<?php 
exec("java -jar ../Netbeans/studentprojectallocationsystem/dist/studentprojectallocationsystem.jar", $output);
//print_r($output);
header("Location: ../adminDashboard/allProjects.php");
 ?>