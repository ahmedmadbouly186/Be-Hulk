

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Dependent Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="Dependent_first_name">Dependent first Name</label>
        <input clas="center" type="text" name="Dependent_first_name" id="Dependent_first_name" required>
         <label for="Dependent_last_name">Dependent last Name</label>
        <input clas="center" type="text" name="Dependent_last_name" id="Dependent_last_name" required>
       <label for="gender">Gender :</label>
       <p>
      <label>
        <input name="gender" type="radio" />
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
        <input name="gender" type="radio" />
        <span>Female</span>
      </label>
    </p>
        <label for="phone">Phone number</label>
        <input type="text" name="phone" id="phone">
        
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>