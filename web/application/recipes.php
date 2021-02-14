
<?php


require "connection.php";
$db = connectRecipeDb();
$id = "";
if(isset($_GET['id'])){
  $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
}


$message = "";
if($id) {
  $sql = "SELECT * from recipes WHERE id = :id";

  $stmt = $db->prepare($sql);

    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $scripture = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
} else {
    $message = "No results found.";
    die();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>