<?php
$supervisorId = $id; 
$sql = "SELECT projects.Id, students.FirstName, students.LastName, projects.StudentId, ProjectTitle, ProjectDetails FROM projects INNER JOIN students ON projects.StudentId = students.Id WHERE projects.SupervisorId = '$supervisorId' && projects.Allocated = '0'";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
    $_SESSION['rowId'] = $row["StudentId"];
    $_SESSION['projectId'] = $row["Id"];
    echo '<tr>';
    echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
    echo "<td>". $row["ProjectTitle"] . "</td>";
    echo "<td>". nl2br($row["ProjectDetails"]) . "</td>";
    echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Accept' onclick=window.location.href='../sql/acceptProject.php'>Accept</button><br><br>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Reject'>Reject</button></td>";
    echo "</tr>";
}
$db->close();
?>