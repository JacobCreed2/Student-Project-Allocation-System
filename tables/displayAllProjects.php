<?php
$supervisorId = $id; 
$sql = "SELECT projects.StudentId, students.FirstName, students.LastName, ProjectTitle, ProjectDetails, Allocated FROM projects INNER JOIN students ON projects.StudentId = students.Id";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["ProjectTitle"] == null) {
            $title = "<strong>No Project<strong>";
        }else{
            $title = $row["ProjectTitle"];
        }
        if ($row["ProjectDetails"] == null) {
            $details = "<strong>No Project<strong>";
        }else{
            $details = $row["ProjectDetails"];
        }
        if ($row["Allocated"] == '0') {
            $check = "Not Allocated";
        }else{
            $check = "Allocated";
        }
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $title . "</td>";
        echo "<td>". $details . "</td>";
        echo "<td>". $check . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>