<!DOCTYPE html>
<html>

	<?php
include ("header.php");
?> 
<head>
	<title>Tarinee Info</title>
</head>
	<div class="container center grey-text">
		<?php if($Trainee): ?>
			<h4><?php echo $Trainee['id']; ?></h4>
			<p>Created by <?php echo $Trainee['First_name']; ?></p>
			<p><?php echo date($Trainee['Last_name']); ?></p>
			<p><?php echo date($Trainee['Phone_Number']); ?></p>
			<p><?php echo date($Trainee['Age']); ?></p>
			<p><?php echo date($Trainee['Gender']); ?></p>
			<p><?php echo date($Trainee['Password']); ?></p>
			

			<?php if($Subscription): ?>
			<h4>Inbody</h4>
			<p><?php echo date($Subscription['Type']); ?></p>
			<p><?php echo date($Subscription['Price']); ?></p>
			<p><?php echo date($Subscription['No_Invetation']); ?></p>

			<?php else: ?>
				<h5>No such Subscriptipn exists.</h5>
			<?php endif ?>

			<?php if($Inbody_Health): ?>
			<h4>Inbody</h4>
			<p><?php echo date($Inbody_Health['Hight']); ?></p>	
			<p><?php echo date($Inbody_Health['PBF']); ?></p>
			<p><?php echo date($Inbody_Health['SMM']); ?></p>
			<p><?php echo date($Inbody_Health['Minerals']); ?></p>		
			<p><?php echo date($Inbody_Health['Water']); ?></p>
			<p><?php echo date($Inbody_Health['Protein']); ?></p>
			<p><?php echo date($Inbody_Health['Fat']); ?></p>
			<p><?php echo date($Inbody_Health['Date']); ?></p>
			<p><?php echo date($Inbody_Health['Metabolic_Rate']); ?></p>
			<p><?php echo date($Inbody_Health['Inbody_Score']); ?></p>
			<?php else: ?>
				<h5>No such Inbody_Health exists.</h5>
			<?php endif ?>
			<!-- DELETE FORM -->
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $Trainee['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>

		<?php else: ?>
			<h5>No such Trainee exists.</h5>
		<?php endif ?>
	</div>


</html>