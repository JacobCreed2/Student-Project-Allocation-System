<?php
$sql = "SELECT Deadline FROM adminsettings";
$result = $db->query($sql);
    // output data of each row
while($row = $result->fetch_assoc()) {
	$Deadline = $row['Deadline'];
}
?>