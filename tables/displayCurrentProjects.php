<?php
$supervisorId = $id; 
$sql = "SELECT projects.Id, projects.StudentId, students.FirstName, students.LastName, ProjectTitle, ProjectDetails, Allocated FROM projects INNER JOIN students ON projects.StudentId = students.Id WHERE projects.SupervisorId = '$supervisorId' && projects.Allocated = '1'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['rowId'] = $row["StudentId"];
        $_SESSION['projectId'] = $row["Id"];
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $row["ProjectTitle"] . "</td>";
        echo "<td>". nl2br($row["ProjectDetails"]) . "</td>";
        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Reject'>Reject</button></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>