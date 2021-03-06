<?php
include('../resources/session.php');
include('../resources/styling.html');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Project Allocation System</title>
</head>
<body>
  <?php include ('adminNavbar.php'); ?>
  <h1>Create New Student</h1>
  <form class="needs-validation" action="../adminDashboard/createStudent.php" method="post" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="firstName">First name</label>
        <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="lastName">Last name</label>
        <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Last name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="lastName">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="studentId">Student Id</label>
        <input type="text" class="form-control" id="studentId" name="studentid" placeholder="Student Id" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Create new student</button>
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