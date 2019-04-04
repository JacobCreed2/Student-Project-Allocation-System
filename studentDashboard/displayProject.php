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
			if ($projectTitle == null) {
				echo "No Project Submitted";
			}else{ 
				echo $projectTitle;
			}
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
			if ($projectDetails == null) {
				echo "No Project Submitted";
			}else{
				echo nl2br($projectDetails);
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="h3">
				Supervisor
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<?php 
			if ($allocated == '1') {
				echo "Allocated to ". $supervisorFirst . " " . $supervisorLast;
			}elseif ($allocated == '0'){
				echo "Awaiting allocation from ". $supervisorFirst . " " . $supervisorLast;
			}else{
				$allocated = 0;
			}
			?>
		</div>
	</div>
	<div class="row">	
		<div class="col">
			<?php
			if ($end != 1) {
			 	echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Edit' onclick='editTitle(); editDetails();'>Edit Proposal</button>";
			 }
			?>
		</div>
	</div>
</div>
<?php include 'editProject.php'; ?>