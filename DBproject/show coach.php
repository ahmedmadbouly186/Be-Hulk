
<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Coaches</title>
</head>
	<h4 class="center grey-text">Coaches</h4>
 
	<div class="container">
		<div class="row">

			


<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<div class="card-action right-align">
								
									<a class="black-text" href="trainee form.php">Add Coach</a>
						
							</div>
						</div>
						
					</div>
				</div>








			<?php foreach($Coaches as $Coach): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							
							<h6><?php echo htmlspecialchars($Coach['id']); ?></h6>
							<ul class="grey-text">
									<li><?php echo htmlspecialchars($Coach['First_name']); ?></li>
									<li><?php echo htmlspecialchars($Coach['Last_name']); ?></li>
									<li><?php echo htmlspecialchars($Coach['gender']); ?></li>
							</ul>
						<a href="Coach data.php?id=<?php echo $Coach['id']?>">More Info</a>
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $Trainee['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

  
        </html>