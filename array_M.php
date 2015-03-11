<?php header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Array_A111111111111</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta name="keywords" content="">
<meta name="description" content="">

</head>

<body>
<?php
	$book1 = array('author'=>'Шевченко','title'=>'Кобзар','year'=> 2005);
	$book2 = array('author'=>'Л.Українка','title'=>'Лісова Пісня','year'=> 2000);
	$book3 = array('author'=>'Г.Сковорода','title'=>'Бджола та шершень','year'=> 1999);
	$book4 = array('author'=>'І.Карпа','title'=>'Піца','year'=> 2004);
	
	$polka1[1]=$book1;
	$polka1[2]=$book2;
	
	$polka2[1]=$book3;
	$polka2[2]=$book4;
	
	$bookshelf[1]=$polka1;
	$bookshelf[2]=$polka2;
	
	echo '<pre>';
	print_r($bookshelf);
	echo '</pre>';
	
	



	$bookshelf2 = array(
				1 => array(
							1 => array('author' => 'Т.Ш.','title' => 'Кобзар','year' => 2005),
							2 => array('author' => 'Т.Ш.','title' => 'Кобзар','year' => 2005)),
							
				2 => array(
							1 => array('author' => 'Г.С.','title' => 'Бджола та шершень','year' => 4968),
							2 => array('author' => 'І.К.','title' => 'Піца','year' => 4953)));
						
					
	
	echo '<pre>';
	print_r($bookshelf2);
	echo'/<pre>'.'<br><br>';
	
	
	echo $bookshelf2[1][1][author],$bookshelf[1][1][title],$bookshelf[1][1][year];


	






















	
?>

</body>

</html>