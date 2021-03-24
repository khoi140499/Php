<?php  
		if(isset($_GET['gui'])){
			$a=(double)$_GET['txtChieuDai'];
			$b=(double)$_GET['txtChieuRong'];
			$c=(double)$_GET['txtDienTich'];
			$c=$a*$b;
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="get">
		<label for="txtChieuDai">Chieu dai: </label><input type="text" name="txtChieuDai"><br><br>
		<label for="txtChieuRong">Chieu rong: </label><input type="text" name="txtChieuRong"><br><br>
		<label for="txtDienTich">Dien tich: </label><input type="text" name="txtDienTich" value="<?php echo $c; ?>"><br><br>
		<input type="submit" name="gui" value="Tinh">
	</form>
</body>
</html>