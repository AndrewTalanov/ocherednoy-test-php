<?php
session_start();
?>
<div id="profile" class="content">
  <div class="profile-container">
    <img src="http://super-ultra-service/api/uploads/img/<? echo $_SESSION['user']['id'] ?>/avatar.jpg" alt="User Profile Picture" class="profile-picture">
    <div class="profile-info">
      <h3>Имя: <?php echo $_SESSION['user']['name'] ?></h3>
      <p>Email: <?php echo $_SESSION['user']['email'] ?></p>
      <p>ID: <?php echo $_SESSION['user']['id'] ?></p>
    </div>
    <form id="form">
      <div class="form-group">
        <label for="image">Выберите изображение</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
</div>