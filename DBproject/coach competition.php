
<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Competitions</title>
</head>
	<h4 class="center grey-text">Competitions</h4>
 
	<div class="container">
		<div class="row">

			


<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<div class="card-action right-align">
								
									<a class="black-text" href="competition form.php">Add Compet.</a>
						
							</div>
						</div>
						
					</div>
				</div>








			<?php foreach($Competitions as $Competition): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							
							<h6><?php echo htmlspecialchars($Competition['ID']); ?></h6>
							<ul class="grey-text">
									<li><?php echo htmlspecialchars($Competition['Name']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Fees']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Prize']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Day']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Time']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Capacity']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Court']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Coach']); ?></li>
									<li><?php echo htmlspecialchars($Competition['Duration']); ?></li>

							</ul>
						 <button class="btn waves-effect waves-light" type="submit" name="action">Remove
   								 <i class="material-icons right"></i>
						 </button>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

 
        </html>