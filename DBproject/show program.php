
<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Trainning Program</title>
</head>
	<h4 class="center grey-text">Trainning Program</h4>
 
	<div class="container">
		<div class="row">

			


<div class="col s6 m4">
	
			<?php foreach($Exercises as $Exercise): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							
							<h6><?php echo htmlspecialchars($Exercise['ID']); ?></h6>
							<ul class="grey-text">
									<li><?php echo htmlspecialchars($Exercise['Name']); ?></li>
									<li><?php echo htmlspecialchars($Exercise['Primary_MUS']); ?></li>
									<li><?php echo htmlspecialchars($Exercise['Secondary_MUS']); ?></li>
									<li><?php echo htmlspecialchars($Exercise['Duration']); ?></li>
									<li><?php echo htmlspecialchars($Exercise['Rest_Time']); ?></li>
							</ul>
						 <button class="btn waves-effect waves-light" type="submit" name="action">Finish
   								 <i class="material-icons right"></i>
						 </button>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>
 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
   								 <i class="material-icons right"></i>
						 </button>
 
        </html>