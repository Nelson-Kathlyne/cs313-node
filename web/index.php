<?php

require 'db.php';

$connection = connectDB();

$sql = "SELECT * from scriptures";

$stmt = $connection->prepare($sql);

// $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

var_dump($response);