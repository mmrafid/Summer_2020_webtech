<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00FF00}
</style>
</head>
<body> 


<?php
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
	
	
 if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  }
  
  


?>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>






</body>
</html>
