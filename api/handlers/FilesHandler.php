<?php 
  require_once '../config/bd.php';

  class FilesHandler {

    private $file;

    public function __construct($file)
    {
      $this->file = $file;
    }

    public function addImg()
    {

      // $uploadDir = '../uploads/img/';
      // $folderName = $_SESSION['user']['id'];

      // $folderPath = $uploadDir.$folderName;
      // echo $folderPath;

      $path = '../uploads/img/';
      $folderName = $_SESSION['user']['id'];

      $folderPath = $path.$folderName;

      mkdir($folderPath, 0777, false);
      
      $fullPath = $folderPath . '/' . 'avatar.png'; 

      if($this->file['error'] == 0){
        if(move_uploaded_file($this->file['tmp_name'], $fullPath)){
          echo 'ok';
        }
    }
      // if ($folderPath) {

      //   if (file_exists($folderPath) && is_dir($folderPath)) {

      //     // $fileName = 'avatar';
      //     // $extension = pathinfo($fileName, PATHINFO_EXTENSION);
  
      //     // $newPath = $folderPath . '/' . $extension;
      //     // echo $fileName;
      //     // move_uploaded_file($fileName, $newPath);
      //     // if (move_uploaded_file($fileName, $newPath)) {
      //     //   return 'ok';
      //     // } else {
      //     //   return 'no';
      //     // }

      //   } else {
      //     mkdir($folderPath, 0777, false);

          // $fileName = 'avatar';
          // $extension = pathinfo($fileName, PATHINFO_EXTENSION);
  
          // $newPath = $folderPath . '/' . $extension;
          // move_uploaded_file($fileName, $newPath);
          // if (move_uploaded_file($fileName, $newPath)) {
          //   return 'ok';
          // } else {
          //   return 'no';
          // }
        // }
      // } else {
      //   return 'nooo';
      // }
    }
  }
