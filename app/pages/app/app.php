<?php
session_start();

// echo session_id();
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once '../../includes/css-bootstrap.php' ?>
  <script type="module" src="../../js/checkAuth.js"></script>
  <title>Главная</title>
  <link rel="stylesheet" href="./app.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1 nav-menu">
        <ul>
          <li>Главная</li>
          <li>Профиль</li>
        </ul>
        <button id="logout" class="btn btn-danger logout-btn">Выход</button>
      </div>
      <div class="col-md main-section">
        <h1>g</h1>
      </div>
    </div>
  </div>

  <?php require_once '../../includes/js-bootstrap.php' ?>
  <script src="./app.js" type="module"></script>
</body>

</html>