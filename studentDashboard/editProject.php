<!-- Modal -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" action="../sql/updateProject.php" method="post" novalidate>
          <div class="form-row">
            <div class="col-md">
              <label for="Title">Title</label>
              <textarea type="text" class="form-control" id="editTitle" name="editTitle" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md">
              <label for="Details">Details</label>
              <textarea type="text" class="form-control" id="editDetails" name="editDetails" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md">
              <label for="Supervisors">Supervisor</label>
              <?php
              include '../sql/selectSupervisors.php';
              ?>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function editTitle() {
    var x = document.getElementById("title").textContent;
    document.getElementById("editTitle").innerHTML = x.trim(); 
  }
  function editDetails() {
    var y = document.getElementById("details").textContent;
    document.getElementById("editDetails").innerHTML = y.trim(); 
  }
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