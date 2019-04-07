<?php
include ('../resources/config.php');
$sql = "DROP TABLE rejectedprojects";
$sql1 = "CREATE TABLE `rejectedprojects` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) NOT NULL,
  `SupervisorId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Reason` text NOT NULL,
  `Resolved` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  CONSTRAINT `student` FOREIGN KEY (`StudentId`) REFERENCES `students` (`Id`) ON UPDATE NO ACTION,
  CONSTRAINT `supervisor` FOREIGN KEY (`SupervisorId`) REFERENCES `supervisors` (`Id`) ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($db->query($sql) === TRUE) {
	echo "Success";
} else {
    echo "failed" . $db->error;
}
if ($db->query($sql1) === TRUE) {
	echo "Success";
  header('Location: http://localhost/student-project-allocation-system/adminDashboard/testing.php');
} else {
    echo "failed" . $db->error;
}
$db->close();
?>