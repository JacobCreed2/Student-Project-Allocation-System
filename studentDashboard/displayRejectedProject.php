<div class="container">
	<div class="row">
		<div class="col">
			<div class="h3">
				Project Title
			</div>
		</div>
	</div>
	<div class="row">	
		<div id="title" class="col">
			<?php 
			echo $projectTitle;
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="h3">
				Project Details
			</div>
		</div>
	</div>
	<div class="row">	
		<div id="details" class="col">
			<?php 
			echo nl2br($projectDetails);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="h4">
				Supervisor <?php echo $supervisorFirst . " " . $supervisorLast ?> has rejected your project for the following Reasons:
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<div class="text-danger">
				<?php 
				echo $reason;
				?>
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<label><strong>Please feel free to edit and resubmit your Project Proposal:</strong></label>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Edit' onclick="editTitle(); editDetails();">Edit Proposal</button>
		</div>
	</div>
</div>
<?php include 'editProject.php'; ?>