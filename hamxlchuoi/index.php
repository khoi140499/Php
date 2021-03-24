<?php 
	// chuyen 1 chuoi thanh mang cac ki tu
	$x= "hoang dang khoi sinh vien hoc vien cong nghe buu chinh vien thong";
	var_dump(explode(' ', $x));
	echo '<br>';
	// chuyen 1 mang thanh 1 chuoi
	$y=array('hoang','dang','khoi','sinh','vien hoc vien cong nghe buu chinh vien thong');
	echo implode(' ',$y);
	echo '<br>';
	// ham dem do dai chuoi
	echo strlen('hoang dang khoi');
	echo '<br>';
	// ham lap chuoi
	echo str_repeat("hoang dang khoi", 2);
	echo '<br>';
	// tim kiem va thay the
	$ab='hoang dang khoi sinh vien hoc vien cong nghe buu chinh vien thong';
	$a=str_replace('hoang dang khoi', 'An Quang Ngoc', $ab);
	echo $a;
	echo '<br>';
	// ma hoa chuoi sang md5
	echo md5('hoang dang khoi');
	echo '<br';
	// ma hoa sha1
	echo sha1('hoang dang khoi');
	echo '<br>';
	// tron 2 mang
	$mang1=array('a','b','c');
	$mang2=array('k','h','z');
	print_r(array_combine($mang1, $mang2));
	echo '<br>';
	//dem so lan xuat hien cua cac phan tu trong mang
	$ar1=[1,'khoi',2,1,1,1,'khoi'];
	print_r(array_count_values($ar1));
	echo '<br>';
	//them vao mang
	$arr1=['hoang','dang','khoi'];
	array_push($arr1, 'Sinh vien');
	print_r($arr1);
	//xoa 1 ptu cua mang. (xoa ptu cuoi cung va tra ve ptu da xoa);
	echo '<br>';
	echo array_pop($arr1);
	print_r($arr1);
	echo '<br>';
	//xoa phan tu o dau mang va tra ve phan tu do
	echo array_shift($arr1);
	echo '<br>';
	// nguoc lai unshift la them ca gia tri vao dau mang
	//kiem tra gia tri co nam trong mang khong
	var_dump(in_array('khoi', $arr1));
	echo '<br>';
	//loai bo nhung gia tri trung
	$arr2=['khoi','khoi'];
	print_r(array_unique($arr2));
?>