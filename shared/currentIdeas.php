<div class="container">
	<div class="row">
		<div class="col">
			<div class="h3">
				Project Ideas
			</div>
		</div>
	</div>
	<div class="row">	
		<div id="ideas" class="col">
			<?php 
			echo nl2br($projectIdeas);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="h3">
				Project Interests
			</div>
		</div>
	</div>
	<div class="row">	
		<div id="echointerests" class="col">
			<?php 
			echo $trim = trim($projectInterests);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Editideas' onclick="editIdeas(); editInterests();">Edit</button>
		</div>
	</div>
</div>
<?php include 'editProjectIdeas.php'; ?>