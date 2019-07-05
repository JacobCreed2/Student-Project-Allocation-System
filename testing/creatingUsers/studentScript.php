<?php
include ('../../resources/config.php');
include ('firstNames.php');
include ('lastNames.php');
include ('projects.php');
$loop = 100;
function selectId($db, $studentId){
  $select = "SELECT Id FROM students WHERE StudentId = '$studentId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["Id"];
    }
  } else {
    echo "0";
  }

  return $id;   
}

for ($i=0; $i < $loop; $i++) {
	$ranf = mt_rand(0,124);
	$ranl = mt_rand(0,999);
	$first = $firstnames[$ranf];
	$last = $lastnames[$ranl]; 
	$password = "1234";
	$hash = password_hash($password, PASSWORD_BCRYPT);
	$supnum = mt_rand(0,22);
	$supid = $supids[$supnum];
	$studentId = mt_rand(10010,19999);
	$projectNum = mt_rand(0,34);
	$projectTitle = $projecttitles[$projectNum];
	$projectDescription = $projectdes[$projectNum];
//-------String------
	echo $first . ' ';
	echo $last . ' ';
	echo $hash . ' ';
	echo $studentId . ' ';
	echo $projectTitle . ' ';
	echo $projectDescription . "<br>";
 $sql = "INSERT INTO students (FirstName, LastName, StudentId) VALUES ('$first', '$last', '$studentId')";
  if ($db->query($sql) === TRUE) {
    echo "New record added students successfully\n";

  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }
  
  $id = selectId($db, $studentId);

  $sql1 = "INSERT INTO users (Username, Password, UserTypeId, StudentId) VALUES ('$studentId', '$hash', '3', '$id')";
  echo $sql1;

  if ($db->query($sql1) === TRUE) {
    echo "New record added users successfully\n";

  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }

  $sql2 = "INSERT INTO projects (StudentId, SupervisorId, ProjectTitle, ProjectDetails) VALUES ('$id', '$supid', '$projectTitle', '$projectDescription')";

  if ($db->query($sql2) === TRUE) {
    //header('Location: ../index.html');

  } else {
    echo "Error: " . $sql2 . "<br>" . $db->error;
  }

}
  $db->close(); 

?>