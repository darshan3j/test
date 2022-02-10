<!DOCTYPE html>

<html>
<head>
<style>


box-sizing: border-box



.form {
  background-color: red;
  width: 400px;
  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
}

.title {
  font-size: 50px;
  margin-bottom: 50px;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=submit]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;


</style> 

<body>

<?php
  if(isset($_POST['submit']))
  {
    $title=$_POST["Title"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $birthday=$_POST["birthday"] ; 
    $telephone=$_POST["telephone"];
    $message=$_POST["message"];

  }
?>

<form action="form2.php" method="post">
<b>Note: Fields with * are Mandatory fields </b> <br><br>
<label for="Title">* Title:</label>
  <select name="Title" id="title" required>
    <option value="Mr">Mr</option>
    <option value="Mrs">Mrs</option>
    <option value="Ms">Ms</option>
  </select>
  <br><br>
<label for="fname">* First name:</label>
  <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" required><br><br>
  <label for="lname">* Last name:</label>
  <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" required><br><br>
  
<label for="birthday">Date of Birth:</label>
<input type="date" id="birthday" name="birthday">
<br>
<br>
<label for="telephone">* TelePhone number:</label>
<input type="text" name="telephone" pattern="[789]{1}[0-9]{9}" 
 title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Enter Your 10 digit Phone Number" required>
 <br>
<br>
 <input type="file" id="myFile" name="filename">
 <br>
<br>
 <label for="email">* Email:</label>
  <input type="email" id="email" name="email" required>
   <br>
<br>
<label for="email">Message:</label>
 <br>
<br>
<textarea rows = "5" cols = "60" maxlenght="300" name = "message" placeholder="Max 300 characters....."> </textarea>
<br>
<br>
  <input type="submit" value="submit" name="submit">

</form>

  


</body>
</head>
</html>