<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Шаблон</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="keywords" content="">
<meta name="description" content="">

</head>

<body>
<?php
	$lang[]='CSS';
	$lang[]='PHP';
	$lang[]='HTML';
	echo $lang[0].'<br>';
	echo $lang[1].'<br>';
	echo $lang[2].'<br>';
	
	echo '<br><br>';
	
	$lang2[]='Css';
	$lang2[]='php';
	$lang2[]='html';
	
	echo'<pre>';
	print_r($lang2);
	echo'</pre>';
	
	echo'<br><br>';
	
	$lang3 = array(9=>'Css',1=>'php',2=>'html','java');
	echo'<pre>';
	print_r($lang3);
	echo'</pre>';
?>
</body>

</html>