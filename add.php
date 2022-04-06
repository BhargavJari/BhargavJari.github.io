<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		print("welcome to MIT"."<br>");
		if(isset($_REQUEST['btnSubmit']))
		{
			$name=$_REQUEST['txtName'];
			$a=$_REQUEST['txtA'];
			$b=$_REQUEST['txtB'];
			$c=$a+$b;
		print("Name is:".$name."<br>");
		print("Addition of a and b is:".$c."<br>");
		}


	?>

	<form method="post">
		<label>Enter Name:</label>
		<input type="text" name="txtName">
		<br>
		<label>Enter A:</label>
		<input type="text" name="txtA">
		<br>
		<label>Enter B:</label>
		<input type="text" name="txtB">
		<br>
		<input type="submit" name="btnSubmit">
	</form>
</body>
</html>