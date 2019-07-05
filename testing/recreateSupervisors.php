<?php
include ('../resources/config.php');


$sql2 = "INSERT INTO supervisors (Id,CurrentAllocation,MaxAllocation) VALUES (1,0,1),(2,0,3),(3,0,4),(5,0,1),(54,0,6),(55,0,1),(56,0,2),(57,0,7),(58,0,1),(59,0,9),(60,0,6),(61,0,2),(62,0,10),(63,0,4),(64,0,6),(65,0,1),(66,0,2),(67,0,6),(68,0,1),(69,0,4),(70,0,7),(71,0,5),(72,0,10),(73,0,8),(74,0,9),(75,0,2),(76,0,1),(77,0,1),(78,0,10)
ON DUPLICATE KEY UPDATE CurrentAllocation=VALUES(CurrentAllocation),MaxAllocation=VALUES(MaxAllocation)";

if ($db->query($sql2) === TRUE) {
	echo "Success";
	header('Location: http://localhost/student-project-allocation-system/adminDashboard/testing.php');
} else {
    echo "failed" . $db->error;
}
$db->close();
?>