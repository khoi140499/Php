<?php
	// mo file  
	$path = 'demo.txt';
	$fi = @fopen($path, "w");
	if(!$fi){
		echo 'mo fil khong thanh cong';
	}
	else{
		// //doc tung dong
		// while (!feof($fi)) {
		//     echo fgets($fi).'<br>';
		// }
		// //doc tung ki tu
		// echo '<br>';
		// while(!feof($fi)){
		// 	echo fgetc($fi).'<br>';
		// }
		// //doc het file
		// $r=fread($fi, filesize('demo.txt'));
		// echo $r;
		//ghi file
		$h='anh la khoi';
		fwrite($fi, $h);
		fclose($fi);
	}
?>