<?php

function connectDB() {
  $dbUrl = getenv('DATABASE_URL');

  if (empty($dbUrl)) {
      // example localhost configuration URL with postgres username and a database called cs313db
      $dbUrl = 'postgres://lsjqzkasmoousz:6ee72fdfb6e14dc53f557568
      a1bb95ff46ddecaa7400a76c4e9c3d7515ea9c7e@ec2-54-225-190-241.compute-1.amazonaws.
      com:5432/dee96cfu5d222r'
      ;
  }

  $dbopts = parse_url($dbUrl);

  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');

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