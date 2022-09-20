

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Coach Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="coach_first_name">Coach first Name</label>
        <input clas="center" type="text" name="coach_first_name" id="coach_first_name" required>
        <label for="coach_last_name">Coach last Name</label>
        <input clas="center" type="text" name="coach_last_name" id="coach_last_name" required>

        <label for="age">Age</label>
        <input type="number" name="age" id="age" min=12>
        <label for="salary">Salary</label>
        <input type="number" name="salry" id="salary" min=1>
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
     	<label for="Wallet">Wallet</label>
        <input type="number" name="Wallet" id="Wallet" min=0>
    	<label for="password">Password</label>
        <input clas="center" type="text" name="password" id="password" required>
        <label for="phone">Phone number</label>
        <input type="text" name="phone" id="phone">
         <label for="num_of_trainees">Number Of Trainees</label>
        <input type="number" name="num_of_trainees" id="num_of_trainees" min=1>
        
        <div class="center"><input type="submit" name="submit" value="submit" class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>