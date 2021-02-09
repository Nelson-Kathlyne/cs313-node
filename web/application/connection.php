<?php

function connectDB() {
  $dbUrl = getenv('DATABASE_URL');

  if (empty($dbUrl)) {
      // example localhost configuration URL with postgres username and a database called cs313db
      $dbUrl = 'postgres://xazedpmayqitvl:5eec8f701e6172d54b89538d3c
      00881800b5e33eb0e178103feeec094250f9d3@ec2-52-207-124-89.compute-1.amazonaws.com
      :5432/d4llj7787ln62m';
  }

  $dbopts = parse_url($dbUrl);

  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');

  var_dump($dbName);

  $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  // Create the actual connection object and assign it to a variable
  
  
  try {
      $link = new PDO($dsn, $dbUser, $dbPassword, $options);
      if(is_object($link)) {
          return $link;
      }

  } catch(PDOException $e) {
      var_dump($e);
      exit;
  }
}



?>