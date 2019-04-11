<?php
$sql = "SELECT supervisors.Id,FirstName, LastName, supervisors.SupervisorId, CurrentAllocation, MaxAllocation, users.UserTypeId FROM supervisors INNER JOIN users ON supervisors.Id = users.SupervisorId";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
	if ($row["UserTypeId"] == 1) {
		$userType = 'Admin';
	}elseif ($row["UserTypeId"] == 2) {
		$userType = 'Supervisor';
	}
    $supId = $row['Id'];
    $name = $row["FirstName"] . " " . $row["LastName"];
    echo '<tr>';
    echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
    echo "<td>". $row["SupervisorId"] . "</td>";
    echo "<td>". $userType . "</td>";
    echo "<td>". $row["CurrentAllocation"] . "</td>";
    echo "<td>". $row["MaxAllocation"] . "</td>";
    echo "<td><form action='../sql/deleteSupervisor.php' method='post'><button type='submit' class='btn btn-primary' name='deleteId' value='".$supId."'>Delete</button></form><br>
    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Allocation'>Set Allocation</button><br><br>
    <form action='../sql/makeSupervisorAdmin.php' method='post'><button type='submit' class='btn btn-primary' name='adminId' value='".$supId."'>Make admin</button></form></td>";
    echo "</tr>";
}
?>