<?php
session_start();

// echo session_id();
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once '../../includes/css-bootstrap.php' ?>
  <script type="module">
    import  {checkAuth} from '../../js/checkAuth.js'
    checkAuth();
  </script>
  <title>Главная</title>
  <link rel="stylesheet" href="./main.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1 nav-menu">
        <ul>
          <li id="link-main">Главная</li>
          <li id="link-profile">Профиль</li>
        </ul>
        <button id="logout" class="btn btn-danger logout-btn">Выход</button>
      </div>
      <div id="content-wrapper" class="col-md main-section d-flex justify-content-center align-items-center">
        <!-- модули -->
      </div>
    </div>
  </div>

  <?php require_once '../../includes/js-bootstrap.php' ?>
  <script src="./main.js" type="module"></script>
</body>

</html>