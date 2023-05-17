<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Описание страницы регистрации">
  <meta name="keywords" content="регистрация, форма, веб-приложение">
  <?php require_once '../../includes/css-bootstrap.php' ?>
  <title>Регистрация</title>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title mb-4">Регистрация</h3>
        <form id="form-register">
          <div class="form-group">
            <label for="email">Email адрес</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
            <small id="emailHelp" class="form-text text-muted">Мы никогда не передадим ваш email кому-либо ещё.</small>
          </div>
          <div class="form-group">
            <label for="name">Имя</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя">
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Введите пароль">
          </div>
          <div class="form-group">
            <label for="confirm-password">Подтверждение пароля</label>
            <input name="password-confirm" type="password" class="form-control" id="confirm-password" placeholder="Подтвердите пароль">
          </div>
          <div class="js-warning"></div>
          <div id="loader" class="mt-3 mb-3 d-none justify-content-center d-none">
            <img src="../../img/loader.gif" alt="loader" width='80px' height='80px'>
          </div>
          <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
          <div class="mt-3">
            <p>Уже зарегистрированы? <a href="../login/login.php">Авторизуйтесь</a>.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="module" src="../../js/register.js"></script>
  <?php require_once '../../includes/js-bootstrap.php' ?>  
</body>
</html>