  
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['sname'];

	if($name == "")
	{
		echo "Cannot be empty";
	}
	
}



?>




<!DOCTYPE html>
<html>
<head>
	<title> Name Form</title>
</head>
<body>

<form method="POST">
	<b>Name:</b><br>
	<input type="text" name="sname" pattern="[a-z0-9._-]" title="Use two Letters at least" value=""><br> <p></p>
<input type="submit" name="" value="submit">
</form>
</body>
</html>
