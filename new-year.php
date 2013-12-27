<style type="text/css">
header, body{background-color:hsl(120,60%,70%);}
title, h1{text-align: center;}
</style>


<html>
<head>
	<title>Homework</title>
</head>
<body>
	<h1>My Homework</h1>
	<h2>Homework Week #1</h2>
	<p><?php echo 'Is dinosaur free';?></p>
</hr>
	<p><?php echo 42+3;?></p>
	<?php $address="114 Observatory" ;?>
	<p><?php echo $address;?></p>
</hr>	
	<ul>
		<?php 
		$authors = array(
		'1870' => 'Charles Dickens', 
		'1863' => 'William Thackeray', 
		'1882' => 'Anthony Trollope', 
		'1889' => 'Gerard Manley Hopkins'
		);
	foreach ($authors as $year => $author):
		?><li><?php echo "$author died in $year."?></li> <?php endforeach;?>
	</ul>