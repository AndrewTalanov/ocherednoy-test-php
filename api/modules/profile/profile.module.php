<?php
session_start();
?>
<div id="profile" class="content">
  <div class="profile-container">
    <img src="http://super-ultra-service/api/uploads/<? echo $_SESSION['user']['id'] ?>/avatar.png?timestamp=<?php echo date('l jS \of F Y h:i:s A') ?>" alt="User Profile Picture" class="profile-picture">
    <div class="profile-info">
      <h3>Имя: <?php echo $_SESSION['user']['name'] ?></h3>
      <p>Email: <?php echo $_SESSION['user']['email'] ?></p>
      <p>ID: <?php echo $_SESSION['user']['id'] ?></p>
    </div>
    <form id="form">
      <div class="form-group">
        <label for="image">Выберите изображение</label>
        <input type="file" class="form-control-file" id="image" name="file">
      </div>
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
</div>