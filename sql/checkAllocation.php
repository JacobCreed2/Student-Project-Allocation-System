<?php
$sql = "SELECT CurrentAllocation, MaxAllocation FROM supervisors WHERE Id = '$id'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$currentAllocation = $row['CurrentAllocation'];
    	$maxAllocation = $row['MaxAllocation'];
    }
} else {
    echo "0 results";
}
?>