<?php
	$berhasil_tersambung = False;
	try {
		// PDO("odbc:Driver={SQL Server};Server=SERVER-NAME;Database=" . self::$dbName . ";User Id=" . self::$dbUsername . ";Password=" . self::$dbUserPassword . ";");

		// $dbhandle = mssql_connect($myServer, $myUser, $myPass) or die("Could not connect to database: ".mssql_get_last_message());

        $pdo = new PDO('odbc:Driver={SQL Server Native Client 10.0};Server="192.168.123.2:1443";Database="RSJT 2013";User Id="simrs"; Password="simrs678"');
  //   	$connectionString = "Driver={4D ODBC Driver 32-bit} ;Server=187.145.45.23 ;UID=Designer ;PWD=123456";
		// $pdo = new \PDO($connectionString);
  //       $connstr = "Driver={SQL Server};Server=192.168.123;Database='RSJT 2013';";
		// $conn = odbc_connect($connstr, "simrs", "simrs678");

        $berhasil_tersambung = True;
    }
    catch(PDOException $e)
    {
    	dd($e);
        die('Could not connect to database');
    }