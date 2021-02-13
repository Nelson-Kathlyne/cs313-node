

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scriptures</title>
</head>
<body>
  <form action="/" method="get">
    <label for="search"></label>
    <input type="search" name="search" id="search">
    <input type="submit" value="search"/>
  </form>
  <h1>Recipes</h1>
  <ul>
  <?php
    foreach($response as $scripture) {
      echo "<li><a href='/scripture.php?id=$scripture[id]'><strong>$scripture[book] $scripture[chapter]:$scripture[verse]</strong></a></li>";
    }
  ?>
  </ul>
  <h4 style="color: red"><?php echo $message;?></h4>
</body>
</html>