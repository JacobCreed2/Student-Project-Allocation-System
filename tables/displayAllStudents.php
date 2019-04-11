<?php
$sql = "SELECT Id,FirstName, LastName, StudentId FROM students";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
	$stuId = $row['Id'];
	echo '<tr>';
	echo "<td>". $row["FirstName"] . " " . $row["LastName"] . "</td>";
	echo "<td>". $row["StudentId"] . "</td>";
	echo "<td><form action='../sql/deleteStudent.php' method='post'><button type='submit' class='btn btn-primary' name='deleteId' value='".$stuId."'>Delete</button></form><br>";
	echo "</tr>";
}
$db->close();
?>