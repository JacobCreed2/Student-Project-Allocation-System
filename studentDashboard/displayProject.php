<div class="container">
	<div class="row">
		<div class="col">
			<div class="h3">
				Project Title
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="col">
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
		<div class="col">
			<?php 
			echo nl2br($projectDetails);
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
			}else{
				echo "Awaiting allocation from ". $supervisorFirst . " " . $supervisorLast;
			}
			?>
		</div>
	</div>
</div>