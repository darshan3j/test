
<html>
<head>
</head>
<body>
	<h2> Thank you <?php echo $_POST["Title"]." ".$_POST["fname"]." ".$_POST["lname"]; ?>  </h2><br> <br> 
	You have submitted the following details: <br>
	Date of Birth: <?php echo$_POST["birthday"]; ?> <br>
	Telephone: <?php echo$_POST["telephone"]; ?> <br>
	File Uploaded: <?php echo$_POST["filename"]; ?> <br>
	Message: <?php echo$_POST["message"]; ?> <br>
</body>
</html>