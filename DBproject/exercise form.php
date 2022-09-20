

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Exercise Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="Exercise_name">Exercise Name</label>
        <input clas="center" type="text" name="Exercise_name" required id="Exercise_name">
         <label for="Muscle">Muscle</label>
        <input clas="center" type="text" name="Muscle" required id="Muscle">
        <label for="Duration">Duration in min</label>
        <input type="number" name="Duration" min=1 id="Duration">
        <label for="Rest">Rest time in min</label>
        <input type="number" name="Rest" min=1>
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>