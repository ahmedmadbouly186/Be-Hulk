<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Device Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="supply_name">Device Name</label>
        <input clas="center" type="text" name="supply_name" id="supply_name" required>
        <label for="Type">Purchase_Date</label>
        <input type="text" name="Type" id="Type" required>
         <label for="price">MaintenanceDate</label>
        <input type="number" name="price" id="price" min=1 required>
        
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>