<!DOCTYPE html>
<html>
<head>
	<title>Program to calculate electricity bill in PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body><br>
<div class="container">
	<h1>Exercice XP-Gold 3  The Shortest-Longest</h1><br>
	<?php
	 $my_array = array("bmw","jeep","dastun","ferrari","Honda");

	 foreach ($my_array as $key => $value) {
		echo $value."<br><br>";
	 }
	 $new_array = array_map('strlen', $my_array);
	 echo "La longueur de tableau la plus courte est :" . min($new_array)."<br>".

	 " La longueur de tableau la plus longue est :" . max($new_array).'.';
	?>
		
	</div>
</body>
</html>