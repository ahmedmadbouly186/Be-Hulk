

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Inbody Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        
        <label for="Hight">Hight</label>
        <input type="number" name="Hight" id="Hight" min=0>
         <label for="PBF">PBF</label>
        <input type="number" name="PBF" id="PBF" min=0>
         <label for="SMM">SMM</label>
        <input type="number" name="SMM" id="SMM" min=0> 
        <label for="Inbody_score">Inbody score</label>
        <input type="number" name="Inbody_score" id="Inbody_score" min=0>
         <label for="Metabolic_Rate">Metabolic Rate</label>
        <input type="number" name="Metabolic_Rate" id="Metabolic_Rate" min=0>
         <label for="Date">Date</label>
        <input type="Date" name="Date" id="Date" >
        <label for="Fat">Fat</label>
        <input type="number" name="Fat" id="Fat" min=0>
        <label for="Protin">Protin</label>
        <input type="number" name="Protin" id="Protin" required>
        <label for="Water">Water</label>
        <input type="number" name="Water" id="Water" min=0>
        <label for="Minerals">Minerals</label>
        <input type="number" name="Minerals" id="Minerals" min=0>
        
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>