<?php
	try{
		$db = new PDO("mysql:host=localhost;dbname=income;charset=utf8;",'root','');
	} catch(PDOException $e){
		//echo $e.getMessagge();
	}
?>