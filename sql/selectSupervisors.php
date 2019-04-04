<?php
$getsup = "SELECT * FROM supervisors";
$select = $db->query($getsup);
echo '<select class="form-control" id="selectsupervisor" name="selectsupervisor" required>';
echo'<option value="noselection">Please select a supervisor</option>';
if ($select->num_rows > 0) {
  while ($row=$select->fetch_assoc()) {
  	if ($row['CurrentAllocation'] < $row['MaxAllocation']) {
  	    echo'<option value="'.$row['Id'].'">'.$row['FirstName']." ".$row['LastName']."  ".$row['CurrentAllocation']."/".$row['MaxAllocation'].'</option>"';	
  	}
  }
  echo '</select>';
}else{
  echo "No results";
}
?>