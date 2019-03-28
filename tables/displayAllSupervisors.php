<?php
$supervisorId = $id; 
$sql = "SELECT FirstName, LastName, SupervisorId, CurrentAllocation, MaxAllocation FROM supervisors";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $row["SupervisorId"] . "</td>";
        echo "<td>". $row["CurrentAllocation"] . "</td>";
        echo "<td>". $row["MaxAllocation"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>