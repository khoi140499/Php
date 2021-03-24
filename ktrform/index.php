<?php  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if($_SERVER["REQUEST_METHOD"])

	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="txtTen">Ten: </label><input type="text" name="txtTen" value=""><br><br>
		<label for="txtEmail">Email: </label><input type="txt" name="txtEmail" value=""><br><br>
		<input type="submit" name="btn">
	</form>
</body>
</html>