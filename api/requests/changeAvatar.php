<?php 
  require_once '../handlers/FilesHandler.php';
  
  session_start();

  $file = $_FILES['file'];
  $filesHandler = new FilesHandler($file);
  $filesHandler->addImg();

?>