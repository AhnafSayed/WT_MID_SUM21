<html>
<head></head>
<body>
	<h1><b><u>Problem 2</u></b></h1>
	<?php 
	$marks = 90;
	if($marks >= 90){
		echo "A+";
	}
	elseif($marks >=80 and $marks<=90){
		echo "A";
	}
	elseif($marks >=70 and $marks<=80){
		echo "B";
	}
	elseif($marks >=60 and $marks<=70){
		echo "C";
	}
	else{
		echo "F";
	}
?>
</body>
</html>