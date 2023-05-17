<?php
session_start();
// session_start();
// echo session_id();
// print_r($_SESSION);
?>
<div class="content">
  <div class="profile-container">
    <img src="http://super-ultra-service/api/uploads/img/<? echo $_SESSION['user']['id'] ?>/avatar.jpg" alt="User Profile Picture" class="profile-picture">
    <div class="profile-info">
      <h3>Имя: <?php echo $_SESSION['user']['name'] ?></h3>
      <p>Email: <?php echo $_SESSION['user']['email'] ?></p>
      <p>ID: <?php echo $_SESSION['user']['id'] ?></p>
    </div>
    <form id="form">
      <input type="file" class="btn btn-primary">Загрузить новое фото</input>
      <button type="submit">Отправить</button>
    </form>
  </div>
</div>


<script>
  const form = document.getElementById('form')
  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const data = new FormData();

    console.log('ok')

    fetch(API.CHANGE_AVATAR, {
      method: 'POST'
    });
  });
</script>

<style>
  .content {
    height: 100%;
    width: 100%;
    background-color: #f2f2f2;
  }

  .profile-container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-top: 50px;
  }

  .profile-picture {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  }

  .profile-info {
    margin-top: 20px;
    text-align: center;
  }

  h3,
  p {
    margin: 5px 0;
  }
</style>