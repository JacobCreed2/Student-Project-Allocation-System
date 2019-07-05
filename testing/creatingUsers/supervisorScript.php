<?php
include ('../../resources/config.php');
include ('firstNames.php');
include ('lastNames.php');
include ('projects.php');
$loop = 25;
function selectId($db, $supervisorId){
  $select = "SELECT Id FROM supervisors WHERE SupervisorId = '$supervisorId'";

  $result = mysqli_query($db, $select);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row["Id"];
    }
  } else {
    echo "No Id found";
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
	$supervisorId = mt_rand(20010,29999);
	$interests = mt_rand(0,5);
	$allocation = mt_rand(1,10);
//-------String------
	echo $first . ' ';
	echo $last . ' ';
	echo $hash . ' ';
	echo $supervisorId . ' ';
	$proint = array();
	for ($j=0; $j < $interests; $j++) { 
	$projectNum = mt_rand(0,42);
	$projectInterests = $projectInt[$projectNum];
	array_push($proint, $projectInterests);
	}
	print_r($proint);
	$strint = implode(",", $proint);
	echo $allocation;
	echo "<br>";
  $sql = "INSERT INTO supervisors (FirstName, LastName, SupervisorId, ProjectIdeas, ProjectInterests, CurrentAllocation, MaxAllocation) VALUES ('$first', '$last', '$supervisorId', '', '$strint', '0', '$allocation')";
  if ($db->query($sql) === TRUE) {
    echo "New record created successfully\n";

  } else {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $id = selectId($db, $supervisorId);

  $sql1 = "INSERT INTO users (Username, Password, UserTypeId, SupervisorId) VALUES ('$supervisorId', '$hash', '2', '$id')";

  if ($db->query($sql1) === TRUE) {
    //header('Location: ../adminDashboard/allSupervisors.php');

  } else {
    echo "Error: " . $sql1 . "<br>" . $db->error;
  }

}
  $db->close();

?>