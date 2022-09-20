

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Competition Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="competition_name">Competition Name</label>
        <input clas="center" type="text" name="competition_name" id="competition_name" required>
        <label for="Fees">Fees</label>
        <input type="number" name="Fees" id="Fees" min=1>
         <label for="prize">Prize</label>
        <input type="number" name="prize" id="prize" min=1 disabled value="50">
        <label for="Duration">Duration in min</label>
        <input type="number" name="Duration" id="Duration" min=1>
        <label for="capacity">capacity</label>
        <input type="number" name="capacity" id="capacity" min=1>
         <label for="Court_Id">Court Id</label>
        <input type="number" name="Court_Id" id="Court_Id" min=0>   
        <label for="Day">Date</label>
        <div class="input-field col s12">
        <select id="Day" name="Day" required>
            <option value="Sat">Sat</option>
            <option value="Sun">Sun</option>
            <option value="Mon">Mon</option>
            <option value="Tus">Tus</option>
            <option value="Wen">Wen</option>
            <option value="Thu">Thu</option>
            <option value="Fri">Fri</option>
    </select>
    </div>
    <label for="time">time</label> 
    <input type="number" name="time" id="time" min=1 required>
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>