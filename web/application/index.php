
<?php


require "connection.php";
$db = connectRecipeDb();

$sql = 'SELECT * from recipes';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Family Recipes</title>
</head>

<body>
<div>

<h1>Family Recipes</h1>

<form action="/" method="get">
    <label for="search"></label>
    <input type="search" name="search" id="search">
    <input type="submit" value="search"/>
  </form>
  <?php
    foreach($response as $recicpe) {
      echo "<li><a href='/recipes.php?id=$recipe[id]'><strong>$recipe[recipeName] $recipe[recipeIngredients] $recipe[recipeInstructions]</strong></a></li>";
    }
  ?>

</div>

</body>
</html>

