<?php
	include_once 'boilerplate.php'
?>
		<div class="row">
				<h1 class="text-center">New Venue</h1>
				<div class="col-6 offset-3">

					<form action="venue.inc.php" method="POST">
						<div class="mb-3">
							<label class="form-label" for="title">Venue Name</label>
							<input class="form-control" type="text" id="title" name"venue[name]">
						</div>
						<div class="mb-3">
							<label class="form-label" for="title">Venue Location</label>
							<input class="form-control" type="text" id="title" name"venue[location]">
						</div>
						<div class="mb-3">
							<label class="form-label" for="title">Image URL</label>
							<input class="form-control" type="text" id="title" name"venue[image]">
						</div>
						<button class="btn btn-primary">Add Venue</button>
					</form>

				</div>
		</div>
	<?php
		include_once 'boilerplatefoot.php'
	?>
