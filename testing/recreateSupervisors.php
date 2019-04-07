<?php
include ('../resources/config.php');


$sql2 = "INSERT INTO supervisors (Id,CurrentAllocation,MaxAllocation) VALUES (1,0,1),(2,0,1),(3,0,4),(4,0,3)
ON DUPLICATE KEY UPDATE CurrentAllocation=VALUES(CurrentAllocation),MaxAllocation=VALUES(MaxAllocation)";

if ($db->query($sql2) === TRUE) {
	echo "Success";
	header('Location: http://localhost/student-project-allocation-system/adminDashboard/testing.php');
} else {
    echo "failed" . $db->error;
}
$db->close();
?>