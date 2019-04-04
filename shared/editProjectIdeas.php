<!-- Modal -->
<div class="modal fade" id="Editideas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Ideas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" action="../sql/updateProjectIdeas.php" method="post" novalidate>
          <div class="form-row">
            <div class="col-md">
              <label for="Ideas">Ideas</label>
              <textarea type="text" class="form-control" id="editIdeas" name="editIdeas" required></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md">
              <label for="Interests">Interests</label>
              <div class="input_fields_wrap"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="document.location.reload(true)">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function editIdeas() {
    var x = document.getElementById("ideas").textContent;
    document.getElementById("editIdeas").innerHTML = x.trim(); 
  }
  function editInterests() {
    var i = 0;
    var y = document.getElementById("echointerests").textContent;
    var wrapper = $(".input_fields_wrap");
    var array = y.split(",");
    while(i < array.length){
      $(wrapper).append('<div class="mb-3 input-group-append"><input type="text" name="Interests[]" value="'+ array[i].trim() +'" required/></div>'); //add input box
      i++;
    }
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