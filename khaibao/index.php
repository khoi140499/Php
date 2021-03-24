<?php 
	$x=3;
	var_dump($x);
	echo '<br>';
	$y=9.4;
	var_dump($y);
	echo '<br>';
	$z=true;
	var_dump($z);
	echo '<br>';
	$a='hoang dang';
	var_dump($a);
	echo '<br>';
	$b='khoi';
	$c="$a $b sinh vien hoc vien cong nghe buu chinh vien thong";
	echo $c;
	echo '<br>';
	//dinh nghia
	define('sdt', '0388618961');
	echo sdt;
	echo '<br>';
	$sinhvien = array('Hoang Dang Khoi' ,'An Quang Ngoc');
 	var_dump($sinhvien);
 	echo '<br>';
 	$nguoi = array('dang'=>'hoc', 'khoi'=>'vien');
 	echo $nguoi['dang'];
 	echo '<br>';
 	foreach ($nguoi as $key=>$value) {
 		echo $key.'-'.$value;
 		echo '<br>';
 	}
 	echo '<br>';
 	for($i=0;$i<10;$i++){
 		if($i<=5){
 			continue;
 		}
 		echo $i;
 	}
 	echo '<br>';
 	echo 'so phan tu cua mang: '.count($nguoi);
?>