<?php 
  require_once '../handlers/FilesHandler.php';
  
  session_start();

  $file = $_FILES['file'];

  // $fileName = $file['name'];
  // $fileType = $file['type'];
  // $fileSize = $file['size'];
  // $fileTmpPath = $file['tmp_name'];
  // $fileError = $file['error'];

  // echo 'ok';
  // print_r( $_FILES );
  // echo $file;
  $filesHandler = new FilesHandler($file);
  echo $filesHandler->addImg();

