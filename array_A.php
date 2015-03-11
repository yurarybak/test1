<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Array_A</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="keywords" content="">
<meta name="description" content="">

</head>

<body>
<?php
	$code['Ukraine']=8;
	$code['USA']=1;
	$code['Germany']=49;
	
	echo $code['Ukraine'].'<br>';
	echo $code['USA'].'<br>';
	echo $code['Germany'].'<br>';
	
	echo '<br><br>';
	
	$code2=array('Ukraine' => 8,'USA' => 1,'Germany' => 49);
	
	echo '<pre>';
	print_r ($code);
	echo '</pre>';
	
	echo '<br><br>';
	
	echo "Код України: $code2[Ukraine]";
?>
</body>

</html>