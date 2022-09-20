

<!DOCTYPE HTML>
           
<?php
include ("header.php");
?> 
<head>
	<title>Trainee Form</title>
</head>
        
<section class="container gret-text center">
   <!--  <h4 class="center_grey-text">Class Form</h4> -->
    <form action="" class="white center" method="POST">
        <label for="trainee_first_name">Trainee first Name</label>
        <input clas="center" type="text" name="trainee_first_name" id="trainee_first_name" required>
         <label for="trainee_last_name">Trainee last Name</label>
        <input clas="center" type="text" name="trainee_last_name" id="trainee_last_name" required>

        <label for="age">Age</label>
        <input type="number" name="age" id="age" min=12>
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
    	<label for="password">Password</label>
        <input clas="center" type="text" name="password" id="password" required>
        <label for="Coach_name">Coach Name</label>
        <input clas="center" type="text" name="Coach_name" id="Coach_name" required>
        <label for="Coach_ID">Coach ID</label>
        <input clas="center" type="text" name="Coach_ID" id="Coach_ID" required>
        <label for="phone">Phone number</label>
        <input type="text" name="phone" id="phone">
        

        <label for="Subscription">Subscription</label>
        <input clas="center" type="text" name="Subscription" id="Subscription" required>
       
        <label for="Type">Subscription Type</label>
        <div class="input-field col s12">
        <select id="Type" name="Type" required>
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
            <option value="Prim">Prim</option>
            
    </select>
    </div>
         <label for="invetations">Number of invetations</label>
        <input type="number" name="invetations" id="invetations" min=0>
        
        <div class="center"><input type="submit" name="submit" value="Go to Inbody " class="btn_brand ">
        </div> 
    </form>
</section>

</HTML>