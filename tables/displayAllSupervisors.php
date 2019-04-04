<?php
$sql = "SELECT FirstName, LastName, SupervisorId, CurrentAllocation, MaxAllocation FROM supervisors";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
    echo "<td>". $row["SupervisorId"] . "</td>";
    echo "<td>". $row["CurrentAllocation"] . "</td>";
    echo "<td>". $row["MaxAllocation"] . "</td>";
    echo "</tr>";
}
$db->close();
?>