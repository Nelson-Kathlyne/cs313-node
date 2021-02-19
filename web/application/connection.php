<?php 

function connectRecipeDb() {
		$dbUrl = getenv('DATABASE_URL');

		if ( empty($dbUrl)) {

			$dbUrl = "postgres://xazedpmayqitvl:5eec8f701e6172d54b89538d3c00881800b5e33eb0e178103feeec094250f9d3@ec2-52-207-124-89.compute-1.amazonaws.com:5432/d4llj7787ln62m";

		}

		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);

		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');


		$dsn = "pssql:host=$dbHost;port=$dbPort;dbname=$dbName";
		$options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		// Create the PDO connection
		try{
			$link = new PDO($dsn, $dbUser, $dbPassword, $options);
			if(is_object($link)) {
				return $link;
			}
		}
	catch (PDOException $ex) {
		var_dump ($ex);
		exit;
	}
}