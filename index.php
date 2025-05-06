<!-- Unit4-02-PHP-ColdHot -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Hot and Cold"/>
    <meta name="keywords" content="immaculata, icd2o" />
    <meta name="author" content="Kukwac" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- CSS file -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Title -->
    <title>Weather Today</title>
  </head>
  <body>
    <?php
      echo "<h3>Weather Today</h3>";
    ?>
    <form action="./results.php" method="post" target="result">
      <label for="userTemp">Weather Today</label>
      <input type="number" id="userTemp" placeholder="Temperature (°C)..." name="userTemp">
      <br><br>
      <input type="submit" value="Display result" />
    </form>
    
    <iframe id="result" name="result">
      <div id="display"></div>
    </iframe>
  </body>
</html>