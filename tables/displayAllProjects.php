<?php
//include('../resources/config.php');
function getSupervisorName($db, $supervisorId)
{
    $sql = "SELECT FirstName, LastName FROM supervisors WHERE Id = '$supervisorId'";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()) {
        $supervisorFirst = $row['FirstName'];
        $supervisorLast = $row['LastName'];
    }
    $supervisor = $supervisorFirst . " " . $supervisorLast;

    return $supervisor;
}


$sql1 = "SELECT projects.StudentId, students.FirstName, students.LastName, projects.SupervisorId, ProjectTitle, ProjectDetails, Allocated FROM projects INNER JOIN students ON projects.StudentId = students.Id";
$result = $db->query($sql1);
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
        $allocated = "Not Allocated";
    }else{
        $allocated = "Allocated";
    }
    $supId = $row['SupervisorId'];
    if ($supId != null && $row["Allocated"] == '0') {
     $supervisors = "No supervisor allocated";
 }elseif ($supId != null && $row["Allocated"] == '1'){
    $supervisors = getSupervisorName($db, $supId);
}else{
    $supervisors = "No project";
}
echo '<tr>';
echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
echo "<td>". $title . "</td>";
echo "<td>". nl2br($details) . "</td>";
echo "<td>". $allocated . "</td>";
echo "<td>". $supervisors . "</td>";
echo "</tr>";
}
$db->close();
?>