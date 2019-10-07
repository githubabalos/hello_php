<?php
	require('functions.php');
	$pdo = connectToDatabase();

	if(isset(&_POST['submit'])){
		$statement = $pdo->prepare('INSERT INTO students(first_name, last_name')
	}


?>