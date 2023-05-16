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
  <title>ПРИЛОЖЕНИЕ</title>
  <style>
    .container-fluid {
      padding: 0;
    }

    .row {
      margin: 0;
    }

    .main-section {
      background-color: #f5f5f5;
      min-height: 100vh;
    }

    .nav-menu {
      background-color: #333;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .nav-menu ul {
      padding: 0;
      list-style: none;
    }

    .nav-menu li {
      padding: 10px;
    }

    .nav-menu li:hover {
      background-color: #555;
      cursor: pointer;
    }

    .logout-btn {
      margin-bottom: 20px;
    }
  </style>
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