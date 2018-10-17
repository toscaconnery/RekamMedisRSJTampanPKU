<?php
	// dd("echoing");
	try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=med2', 'root', '');
        $statement = $pdo->prepare('select * from pasien_server_2');
        $statement->execute();
        $this->data['pasien_server_2'] = $statement->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
        die('Could not connect to database');
    }