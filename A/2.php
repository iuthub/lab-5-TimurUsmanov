<!DOCTYPE html>
<html>


<?php
		session_start();

		if(!isset($_SESSION['name'])){
		$powname=array("lion","mouse","tiger","monkey","elephant","giraffe");
		$_SESSION['name']=$powname[rand(0,5)];

		}	

		if(isset($_SESSION['count'])){
			$_SESSION['count']++; 
		}else{
			$_SESSION['count']=1;
		}
?>
<head>
<title></title>
</head>
<body>

<?php
		echo "Animal choosen for you: " . $_SESSION['name'];
		echo "<br />". "Visited: " . $_SESSION['count'] . " times";
?>

<a href="unset.php">clear data</a>


</body>
</html>