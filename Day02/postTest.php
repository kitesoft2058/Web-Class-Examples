<?php 

	header('Content-Type: text/html; charset=utf-8');


	$name=$_POST['name'];
	$pw= $_POST['pw'];
	$rg1= $_POST['rg1'];
	$msg= $_POST['msg'];
	$sel= $_POST['sel'];

	// 텍스트에러이러의 값의 \n의 줄바꿈이어서 이를 <br>태크로 변경.
	$msg= nl2br($msg);

	echo "$name<br>";
	echo "$pw<br>";
	echo "$rg1<br>";
	echo "$msg<br>";
	echo "$sel<br>";

	$fruits=$_POST['fruits'];
	$num= count($fruits);	
	for($i=0; $i<$num; $i++){
		echo "$fruits[$i],";
	}


 ?>