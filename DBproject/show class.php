
<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Classes</title>
</head>
	<h4 class="center grey-text">Classes</h4>
 
	<div class="container">
		<div class="row">

			


<div class="col s6 m4">
					
			<?php foreach($Classes as $Class): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							
							<h6><?php echo htmlspecialchars($Class['ID']); ?></h6>
							<ul class="grey-text">
									<li><?php echo htmlspecialchars($Class['Name']); ?></li>
									<li><?php echo htmlspecialchars($Class['Price']); ?></li>
									<li><?php echo htmlspecialchars($Class['Week_Day']); ?></li>
									<li><?php echo htmlspecialchars($Class['Time']); ?></li>
									<li><?php echo htmlspecialchars($Class['Capacity']); ?></li>
									<li><?php echo htmlspecialchars($Class['Court']); ?></li>
									<li><?php echo htmlspecialchars($Class['Coach']); ?></li>
									<li><?php echo htmlspecialchars($Class['Duration']); ?></li>

							</ul>
						 <button class="btn waves-effect waves-light" type="submit" name="action">Join
   								 <i class="material-icons right"></i>
						 </button>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

 
        </html>