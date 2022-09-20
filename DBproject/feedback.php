

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Feedback</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
   <pre>Rate our Gym from 0 to 10 
   0 mean very bad 
   10 mean excellent</pre>
    <form action="" class="white center" method="POST">
        <label for="Devices">Devices</label>
        <input clas="center" type="number" name="Devices" id="Devices" min=0 max=10 required>
        
        <label for="Coach">Coach</label>
        <input clas="center" type="number" name="Coach" id="Coach" min=0 max=10 required>

        <label for="Music">Music</label>
        <input clas="center" type="number" name="Music" id="Music" min=0 max=10 required>

        <label for="Recommend">Recommend for your friends</label>
        <input clas="center" type="number" name="Recommend" id="Recommend" min=0 max=10 required>

       
         <label for="comment">Any comments</label>
        <!--<input type="text" name="comment" id="comment"> -->
        <textarea></textarea name="comment" id="comment">
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>