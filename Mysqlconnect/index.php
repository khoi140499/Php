<?php  
	$conn= new mysqli('localhost', 'root', '', 'login');
	if($conn->connect_error){
		die("Ket noi that bai".connect_error);
	}
	else{
		$s="insert into lg values('khoi140499','123456')";
		if($conn->query($s) ===true){
			echo 'Them thanh cong';
		}
		else{
			echo 'them that bai';
		}
	}
	$conn->close();
?>