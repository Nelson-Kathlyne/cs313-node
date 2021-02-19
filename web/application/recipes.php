
<?php


require "connection.php";
$db = connectRecipeDb();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
</head>
<body>
    <div id = viewRecipe>
    <h1>Let's Eat</h1>
    <?php
      $viewRecipe = $db->prepare("SELECT recipeName, recipeIngredients,
      recipeInstructions FROM recipes");
      $viewRecipe ->execute();

      while ($row = $viewRecipe ->fetch(PDO::FETCH_ASSOC)
      {
        $recipeName = $row['recipeName'];
        $recipeIngredients = $row['recipeIngredients'];
        $recipeInstructions = $row['recipeInstructions'];

        echo "<h3>$recipeName<h3> <p>$recipeIngredients<p><br><p>$recipeInstructions";

      }
    ?>
    </div>
</body>
</html>