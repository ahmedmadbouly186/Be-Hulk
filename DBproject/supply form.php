<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Supply Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="supply_name">Supply Name</label>
        <input clas="center" type="text" name="supply_name" id="supply_name" required>
        <label for="Type">Type</label>
        <input type="text" name="Type" id="Type" required>
         <label for="price">Price</label>
        <input type="number" name="price" id="price" min=1 required>
        <label for="Count">Count</label>
        <input type="number" name="Count" id="Count" min=1>
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>