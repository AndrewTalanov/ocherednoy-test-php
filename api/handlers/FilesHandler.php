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

      $uploadDir = '../uploads/img/';
      $folderName = $_SESSION['user']['id'];

      $folderPath = $uploadDir.$folderName;
      
      if (!$folderPath) {

        mkdir($folderPath, 0777, false);

        $fileName = 'avatar';
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);

        $newPath = $folderPath . '/' . $extension;

        if (move_uploaded_file($this->file, $newPath)) {
          return 'ok';
        } else {
          return 'no';
        }
      } else {
        return 'nooo';
      }
    }
  }
?>