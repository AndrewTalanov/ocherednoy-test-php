<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once '../includes/css-bootstrap.php' ?>
  <title>Регистрация</title>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title mb-4">Авторизация</h3>
        <form>
          <div class="form-group">
            <label for="email">Email адрес</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Введите email">
            <small id="emailHelp" class="form-text text-muted">Мы никогда не передадим ваш email кому-либо ещё.</small>
          </div>
          <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="Введите пароль">
          </div>
          <button type="submit" class="btn btn-primary">Войти</button>
          <div class="mt-3">
            <a href="register.php">Нет аккаунта? Зарегистрируйтесь!</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php require_once '../includes/js-bootstrap.php' ?>  
</body>
</html>