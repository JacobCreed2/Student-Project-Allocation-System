<?php
include ('../resources/config.php');


$sql2 = "INSERT INTO supervisors (Id,CurrentAllocation,MaxAllocation) VALUES (1,1,2),(2,0,8),(3,1,1)
ON DUPLICATE KEY UPDATE CurrentAllocation=VALUES(CurrentAllocation),MaxAllocation=VALUES(MaxAllocation)";

if ($db->query($sql2) === TRUE) {
	echo "Success";
	header('Location: http://localhost/student-project-allocation-system/adminDashboard/testing.php');
} else {
    echo "failed" . $db->error;
}
$db->close();
?>