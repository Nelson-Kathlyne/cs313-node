
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

<form action="/" method="get">
    <label for="search"></label>
    <input type="search" name="search" id="search">
    <input type="submit" value="search"/>
  </form>


</div>

</body>
</html>

