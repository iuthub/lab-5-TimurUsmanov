<?php
	$arr=explode(";",file_get_contents("pass.txt"));
echo $arr[0];
echo $arr[1];
	session_start();

	if(isset($_SESSION['name'])){
		echo "Hello World!";
	}else{
		if($_POST['name']){
			echo "string";
		}
	}
?>