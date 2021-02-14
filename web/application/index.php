
<?php


require "connection.php";
$db = connectRecipeDb();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Family Recipes</title>
</head>

<body>
<div>

<h1>Family Recipes</h1>

<?php





//  prepare the statement

$statement = $db->prepare("SELECT recipeName, recipeIngredients, recipeInstructions FROM recipes");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{

	$name = $row['recipeName'];
	$ingredients = $row['recipeIngredients'];
	$instructions = $row['recipeInstructions'];


	echo "<p><h3>$name</h3><br>$ingredients<br>$instructions<p>";
}

?>


</div>

</body>
</html>

