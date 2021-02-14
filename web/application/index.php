
<?php


require "connection.php";
$db = connectRecipeDb();

$search = "";
if(isset($_GET['search'])){
  $search = filter_input(INPUT_GET,'search',FILTER_SANITIZE_STRING);
}

$sql = 'SELECT * from recipes';

if($search) {
  $sql = "SELECT * from recipes WHERE recipeName = :search";
}

$stmt = $db->prepare($sql);

$stmt ->execute();

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

