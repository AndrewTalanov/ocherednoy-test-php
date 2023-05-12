<?php
  require_once '../functions/bd.php';
  
  if(!empty($_POST)) {

    $database = Database::getInstance();
    $conn = $database->getConnection();

    // проверка емайла - занят или нет
    $smtp = $conn->prepare("SELECT email FROM users");
    $smtp->execute();
    $emails = $smtp->fetchAll(PDO::FETCH_ASSOC);

    $continue = true;

    $current_email = $_POST['email'];
    foreach ($emails as $email) {
      if ($email['email'] == $current_email) {
        http_response_code(400);
        echo "Пользователь с таким email уже существует";
        exit();
      }
    }
    if ($continue) {
      $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
      $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
      $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

      $hash = password_hash($password, PASSWORD_DEFAULT);

      $conn = $conn->prepare("INSERT INTO users (email, name, password) VALUES (:email, :name, :password)");
      $conn->bindParam(':email', $email);
      $conn->bindParam(':name', $name);
      $conn->bindParam(':password', $hash);
      $conn->execute();
    } 
  }
?>