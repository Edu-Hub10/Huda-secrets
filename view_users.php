<!DOCTYPE html>
<html>
<head>
  <title>View Registered Users</title>
</head>
<body>
  <h2>Registered Users</h2>
  <?php
  $file = fopen("users.txt", "r");
  while(!feof($file)) {
    echo fgets($file) . "<br>";
  }
  fclose($file);
  ?>
</body>
</html>
