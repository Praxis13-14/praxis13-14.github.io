<style type="text/css">
header, body{background-color:hsl(120,60%,70%);}
title, h1{text-align: center;}
</style>


<html>
<head>
	<title>Praxis New Year</title>
</head>
<body>
	<h1>Happy New Year!!!</h1>
	<p><?php echo 'Happy New Year!!!';?></p>
</hr>
	<p><?php echo 2013+1;?></p>
</hr>	
	<ul>
		<?php 
		$resolutions = array(
		'January' => 'learn to cook', 
		'February' => 'exercise more to burn off food calories', 
		'March' => 'take surplus cooking to friends and make them happy', 
		);
	foreach ($resolutions as $month => $resolution):
		?><li><?php echo "In $month I will $resolution."?></li> <?php endforeach;?>
	</ul>