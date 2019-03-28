<?php
$sql = "SELECT FirstName, LastName, StudentId FROM students";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $row["StudentId"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>