<?php
$sql = "SELECT FirstName, LastName, ProjectIdeas, ProjectInterests, CurrentAllocation, MaxAllocation FROM supervisors";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
    echo "<td>". nl2br($row["ProjectIdeas"]) . "</td>";
    echo "<td>". $row["ProjectInterests"] . "</td>";
    echo "<td>". $row["CurrentAllocation"] . "</td>";
    echo "<td>". $row["MaxAllocation"] . "</td>";
    echo "</tr>";
}
$db->close();
?>