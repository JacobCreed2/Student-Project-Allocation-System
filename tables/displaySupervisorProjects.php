<?php
$supervisorId = $id; 
$sql = "SELECT students.Id, students.FirstName, students.LastName, ProjectTitle, ProjectDetails FROM projects INNER JOIN students ON projects.StudentId = students.Id WHERE projects.SupervisorId = '$supervisorId'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['rowId'] = $row["Id"];
        echo '<tr>';
        echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
        echo "<td>". $row["ProjectTitle"] . "</td>";
        echo "<td>". $row["ProjectDetails"] . "</td>";
        echo "<td><button type='button' class='btn btn-primary' onClick=\"window.location.href='../sql/acceptProject.php'\">Accept</button></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>