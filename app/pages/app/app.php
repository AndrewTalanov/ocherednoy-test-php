<?php
session_start();

echo session_id();
print_r($_SESSION);

// echo '<br>';
// echo $_POST['token'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="module" src="../../js/checkAuth.js"></script>
  <title>ПРИЛОЖЕНИЕ</title>
</head>
<body>
    тут различный текст
    <button id="logout">выход</button>
    <script src="./app.js" type="module"></script>
</body>
</html>