<?php 
session_start();

if ($_POST['token'] == $_SESSION['csrf_token']) {

  $token = bin2hex(random_bytes(32));
  $_SESSION['csrf_token'] = $token;
  echo $_SESSION['csrf_token'];
  
} else {
  http_response_code(400);
  echo 'no';
}
