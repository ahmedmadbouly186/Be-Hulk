<!DOCTYPE html>
<html>
	
	<?php
include ("header.php");
?> 
<head>
	<title>Supplies</title>
</head>
	<h4 class="center grey-text">Supplies</h4>
 
	<div class="container">
		<div class="row">

<div class="col s6 m4">
			
			<?php foreach($Supplies as $Supply): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($Supply['title']); ?></h6>
							<ul class="grey-text">
								
									<li><?php echo htmlspecialchars($Supply['Type']); ?></li>
									<li><?php echo htmlspecialchars($Supply['Price']); ?></li>
									<li><?php echo htmlspecialchars($Supply['Count']); ?></li>
								
							</ul>
							<a class="btn-floating btn-large waves-effect waves-light gray"><i class="material-icons">+</i></a>
 							<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">-</i></a>
						</div>
						
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>
        </html>