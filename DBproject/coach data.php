<!DOCTYPE html>
<html>

	<?php
include ("header.php");
?> 
<head>
	<title>Coach Info</title>
</head>
	<div class="container center grey-text">
		<?php if($Coach): ?>
			<h4><?php echo $Coach['id']; ?></h4>
			<p>Created by <?php echo $Coach['First_name']; ?></p>
			<p><?php echo date($Coach['Last_name']); ?></p>
			<p><?php echo date($Coach['Phone_Number']); ?></p>
			<p><?php echo date($Coach['Age']); ?></p>
			<p><?php echo date($Coach['Gender']); ?></p>
			<p><?php echo date($Coach['Password']); ?></p>
			<p><?php echo date($Coach['Sallary']); ?></p>
			<p><?php echo date($Coach['Wallet']); ?></p>
			<p><?php echo date($Coach['Num_Trainees']); ?></p>
			<p><?php echo date($Coach['Sallary']); ?></p>
			
			
			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $Trainee['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such Coach exists.</h5>
		<?php endif ?>
	</div>


</html>