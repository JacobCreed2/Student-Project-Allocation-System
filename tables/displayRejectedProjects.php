<?php
$supervisorId = $id; 
$sql = "SELECT students.FirstName, students.LastName, projects.ProjectTitle, projects.ProjectDetails, Reason FROM ((rejectedprojects INNER JOIN students ON students.Id = rejectedprojects.StudentId)INNER JOIN projects ON rejectedprojects.ProjectId = projects.Id) WHERE rejectedprojects.SupervisorId = '$supervisorId'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $row["ProjectTitle"] . "</td>";
        echo "<td>". nl2br($row["ProjectDetails"]) . "</td>";
        echo "<td>". $row["Reason"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>