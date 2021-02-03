<?php

require 'db.php';

$connection = connectDB();

$sql = "SELECT * from scriptures";

$stmt = $connection->prepare($sql);

// $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scriptures</title>
</head>
<body>
  <form action="" method="get"></form>
  <h1>Scripture Resources</h1>
  <?php
    foreach($response as $scripture) {
      var_dump($scripture);
    }
  ?>
</body>
</html>