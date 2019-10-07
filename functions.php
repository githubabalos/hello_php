<?php
	function connectToDatabase(){
		try{
			$pdo = new PDO('mysql:host=127.0.0.1:dname=test', 'root', 'root')
		}
		catch (PDOException $exception){
			echo $e->getMessage();
		}

		return $pdo;
	}	


?>