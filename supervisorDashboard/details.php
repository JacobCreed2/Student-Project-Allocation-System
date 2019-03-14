<?php
   include('../resources/session.php');
   include('../resources/styling.html');
   include('../resources/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Project Allocation System</title>
</head>
<body>
<?php include ('studentNavbar.php'); ?>

<form class="needs-validation" action="../sql/createProject.php" method="post" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstName">Project Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Project Title" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="lastName">Project Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Project Description" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="studentId">Select a Supervisor</label>
        <?php
        $getsup = "SELECT * FROM supervisors";
        $select = $db->query($getsup);
        echo '<select class="form-control" id="selectsupervisor" name="selectsupervisor" placeholder="Student Id" required>';
        if ($select->num_rows > 0) {
                while ($row=$select->fetch_assoc()) {
                  echo'<option value"'.$row['Id'].'">'.$row['FirstName']." ".$row['LastName']."  ".$row['CurrentAllocation']."/".$row['MaxAllocation'].'</option>"';
                }
                echo '</select>';
        }else{
          echo "No results";
        }
        ?>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Add new project</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>