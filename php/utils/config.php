<?php 
	try {
		$db = new PDO('mysql:host=127.0.0.1;dbname=hot','ROOT','1234');	
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo 'Conectado';
	} catch (PDOException $e) {
		echo 'Não foi possível conectar: '.$e->getMessage();
		exit();
	}
?>