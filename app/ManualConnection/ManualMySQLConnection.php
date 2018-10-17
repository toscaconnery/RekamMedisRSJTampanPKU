<?php
	$berhasil_tersambung = False;
	try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=med2', 'root', '');
        $berhasil_tersambung = True;
    }
    catch(PDOException $e)
    {
        die('Could not connect to database');
    }