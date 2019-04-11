<!-- Modal -->
<div class="modal fade" id="Allocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Edit Ideas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="document.location.reload(true)">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" action="../sql/updateSupervisorAllocation.php" method="post" novalidate>
					<div class="form-row">
						<div class="col-md">
							<?php include '../sql/selectSupervisors.php' ?>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md">
							<label for="New Allocation">Allocation</label>
							<br>
							<input type="input" name="allocation">
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