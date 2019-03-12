<?php 
function findId($db,$studentId)
{
  $findId = "SELECT StudentId FROM projects WHERE StudentId = '$studentId'";

  $result = mysqli_query($db, $findId);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $stuId = $row["StudentId"];
      //echo $stuId;
    }
  } else {
    $stuId = null;
  }
  return $stuId;
}

?>