<?php

require 'connection.php';

$search = "";
if(isset($_GET['search'])){
  $search = filter_input(INPUT_GET,'search',FILTER_SANITIZE_STRING);
}

$connection = connectDB();

$sql = 'SELECT * from recipes';


$sql = 'SELECT recipeName, recipes.foodIndexId FROM recipes INNER JOIN foodIndex
ON foodIndex.foodIndexId = recipes.foodIndexId'
//if($search) {
  //$sql = "SELECT * from recipes WHERE book = :search";
//}

$stmt = $connection->prepare($sql);

$stmt->bindValue(':search', $search, PDO::PARAM_STR);
$stmt->execute();
$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();

$message = "";
if($stmt->rowCount() == 0) {
  $message = "No results found.";
}


?>