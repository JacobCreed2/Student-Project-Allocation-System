<?php 
include ('../resources/session.php');
//if($_SERVER["REQUEST_METHOD"] == "POST") {
  $rowId = mysqli_real_escape_string($db,$_SESSION['rowId']);
  //echo $_SESSION['rowId'];
  
  $sql = "UPDATE projects SET Allocated = '1' WHERE StudentId = '$rowId'";
if ($db->query($sql) === TRUE) {
    echo "Project updated successfully\n";

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
//echo "Hello";
?>