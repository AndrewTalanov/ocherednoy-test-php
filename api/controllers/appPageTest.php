<?php 
session_start();
if ($_POST['token'] == $_SESSION['csrf_token']) {

  echo 'yes';
} else {
  echo $_POST['token'] . ' <br> '. $_SESSION['csrf_token'];
  echo '<br>';
  echo 'no';
}
