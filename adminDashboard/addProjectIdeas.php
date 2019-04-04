	<h1>Please use this form to add your project ideas and interests</h1>
	<form class="needs-validation" action="../sql/addProjectIdeas.php" method="post" novalidate>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="firstName">Project Ideas</label>
				<textarea type="text" class="form-control" id="ideas" name="ideas" placeholder="Ideas" required></textarea>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="firstName">Project Interests</label>
				<div class="input_fields_wrap">
					<div class="mb-3 input-group">
						<input type="text" name="mytext[]">
						<div class="input-group-append">
							<button class="btn btn-success add_field_button">Add</button>
						</div>
					</div>
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
<script>
	$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div class="mb-3 input-group-append"><input type="text" name="mytext[]"/><a href="#" class="btn btn-danger remove_field">Remove</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
</script>