<?php 
$sql = "SELECT projects.Id, students.FirstName, students.LastName, projects.StudentId, ProjectTitle, ProjectDetails FROM projects INNER JOIN students ON projects.StudentId = students.Id WHERE projects.SupervisorId = '$id' && projects.Allocated = '0'";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
    $StuId = $row["StudentId"];
    $_SESSION['projectId'] = $row["Id"];
    echo '<tr>';
    echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
    echo "<td>". $row["ProjectTitle"] . "</td>";
    echo "<td>". nl2br($row["ProjectDetails"]) . "</td>";
    echo "<td><form action='../sql/acceptProject.php' method='post'><button type='submit' class='btn btn-primary' name='Accept' value='". $row["StudentId"] ."'>Accept</button></form><br><br>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Reject' id='reject' name='Reject' value='". $row["StudentId"] ."'>Reject</button></td>";
    echo "</tr>";
}


$db->close();
?>
