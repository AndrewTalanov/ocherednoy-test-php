<?php
  require_once '../config/bd.php';
  require_once '../models/User.php';
  require_once '../handler/DatabaseHandler.php';

  class RegisterController {

    private $db;
    private $dbHandler;

    public function __construct()
    {
      $this->db = Database::getInstance()->getConnection();
      $this->dbHandler = new DatabaseHandler($this->db);
    }

    public function registerUser()
    {
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
      $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

      if (!$email || !$name || !$password) {
        http_response_code(400);
        exit();
      }

      if (strlen($name) > 255 || strlen($password) > 255) {
        http_response_code(400);
        exit();
      }

      if ($this->dbHandler->userExists($email)) {
        http_response_code(400);
        exit();
      }

      $hash = password_hash($password, PASSWORD_ARGON2ID);

      $user = new User(null, $email, $name, $hash);

      $this->dbHandler->insertUser($user);
    }
  }
?>