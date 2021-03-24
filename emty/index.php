<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="get">
		<input type="text" name="txtTen" placeholder="ten">
		<input type="submit" name="sub">
	</form>
	<?php  
		if(empty($_GET['txtTen'])){
			echo 'b chua nhap ten';
		}
		else{
			echo 'ten: '.$_GET['txtTen'];
		}
	?>
</body>
</html>