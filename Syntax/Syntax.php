<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- In PHP script starts with <?php ?> -->
	<?php echo "Learning PHP <br>"; ?>
	<?php echo "HelloWorld <br>"; ?>
	
	<!--
		Comment in PHP
		// single-line comment
		/*
			multiple-line comment 
		 */
	-->
	<?php
		// x = 5
		$x = 5;
		echo $x;
		echo "<br>";
		// Output 5;
	?>
	<!--In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.-->
	<?php
		echo "Hello A <br>";
		ECHO "Hello B <br>";
		eCHo "Hello C <br>";
		// Output Hello A
		// 		  Hello B
		// 		  Hello C
	?>
	<!-- all variable names are case-sensitive --> 
	<?php
		$color = "red";
		$Color = "blue";
		echo "My car is ".$color . "<br>";
		echo "My cat is ".$Color . "<br>";
		echo "My dog is ".$cOlor . "<br>";
		//output My car is red
		//		 My cat is blue
		//		 Fail : Error Undefined variable cOlor;
	?>
</body>
</html>