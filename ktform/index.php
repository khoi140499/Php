<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$ten=$email="";
	$tenx=$emailx="";
	if(!empty($_POST['gui'])){
		if(empty($_POST['txtTen'])){
			$ten="chua nhap ten";
		}
		else{
			$tenx=$_POST['txtTen'];
		}
		if(empty($_POST['txtemail'])){
			$email="chua nhap email";
		}
		else{
			$emailx=$_POST['txtemail'];
		}
	}
	?>
	<form action="" name="mform" method="POST">
		<input type="text" name="txtTen" placeholder="nhap ten" class="ten"><?php echo $ten; ?>
		<input type="text" name="txtemail" placeholder="nhap email" class="email"><?php echo $email; ?>
		<input type="submit" name="gui" value="Gui" class="btnn">
	</form>
	<?php  
		echo 'ten: '.$tenx;
		echo '<br>';
		echo 'email: '.$emailx;
	?>
</body>
</html>