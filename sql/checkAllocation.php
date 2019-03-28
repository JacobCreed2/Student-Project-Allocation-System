<?php 
$supervisorId = $id; 
$sql = "SELECT CurrentAllocation, MaxAllocation FROM supervisors WHERE supervisors.Id = '$supervisorId'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$currentAllocation = $row['currentAllocation'];
    	$maxAllocation = $row['maxAllocation'];
    }
} else {
    echo "0 results";
}
?>