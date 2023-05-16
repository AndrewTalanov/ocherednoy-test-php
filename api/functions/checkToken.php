<?php 
session_start();

if ($_POST['token'] == $_SESSION['csrf_token']) {
  echo 'yes';
} else {
  http_response_code(400);
  echo 'no';
}
