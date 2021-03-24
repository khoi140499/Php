<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" accept="index.php">
		<label for="txtTen">Tên: </label><input type="text" name="txtTen"><br><br>
		<label for="txtTuoi">Tuổi: </label><input type="text" name="txtTuoi"><br><br>
		<input type="submit" name="gui" value="Gửi">
	</form>
	<?php 
		if(isset($_POST['gui'])){
			echo 'ten :'.$_POST['txtTen'];
			echo '<br>';
			echo 'tuoi: '.$_POST['txtTuoi'];
		}
			die();
	 ?>
</body>
</html>