
<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Devices</title>
</head>
	<h4 class="center grey-text">Devices</h4>
 
	<div class="container">
		<div class="row">

			


<div class="col s6 m4">
					

<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<div class="card-action right-align">
								
									<a class="black-text" href="device form.php">Add Device</a>
						
							</div>
						</div>
						
					</div>
				</div>







			<?php foreach($Devices as $Device): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							
							<h6><?php echo htmlspecialchars($Device['ID']); ?></h6>
							<ul class="grey-text">
									<li><?php echo htmlspecialchars($Device['Name']); ?></li>
									<li><?php echo htmlspecialchars($Device['Price']); ?></li>
									<li><?php echo htmlspecialchars($Device['MaintenanceDate']); ?></li>
									<li><?php echo htmlspecialchars($Device['Age']); ?></li>
									<li><?php echo htmlspecialchars($Device['Purchase_Date']); ?></li>
							</ul>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

 
        </html>