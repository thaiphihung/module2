<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo route('staff.store')?>" method="POST"> 
  
@csrf
  
<label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>