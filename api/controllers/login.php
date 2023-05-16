<?php 
  require_once './LoginController.php';
  session_start();
  
  $loginController = new LoginController();
  $token = $loginController->loginUser();

  echo $token;
?>