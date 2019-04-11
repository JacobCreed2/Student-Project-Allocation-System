<?php
$totalStudents = "SELECT COUNT(Id) FROM students";
$result = $db->query($totalStudents);
    // output data of each row
while($row = $result->fetch_assoc()) {
	$count = $row['COUNT(Id)'];
}
$sql = "SELECT SUM(MaxAllocation) FROM supervisors";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
	$totalAllocation = $row['SUM(MaxAllocation)'];
}
?>