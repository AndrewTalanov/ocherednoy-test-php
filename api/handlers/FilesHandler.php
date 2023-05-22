<?php
require_once '../config/bd.php';

class FilesHandler
{

  private $file;

  public function __construct($file)
  {
    $this->file = $file;
  }

  public function addImg()
  {

    $path = '../uploads/';
    $folderName = $_SESSION['user']['id'];

    $folderPath = $path . $folderName;

    mkdir($folderPath, 0777, false);

    $fullPath = $folderPath . '/' . 'avatar.png';

    if ($this->file['error'] == 0) {
      if (move_uploaded_file($this->file['tmp_name'], $fullPath)) {
        echo 'ok';
      }
    }
  }

  public function addFile() 
  {
    
  }

  public function getAllFiles()
  {
    $folder = '../uploads/'.$_SESSION['user']['id'].'/files';

    $files = scandir($folder);

    $files = array_diff($files, ['.', '..']);

    $fileSizes = [];

    foreach ($files as $file) {
      $filePath = $folder . '/' . $file;
      $fileSize = filesize($filePath);
      $fileSizes[$file] = $fileSize;
    }

    return $fileSizes;
  }

  public function downloadFile() {

  }

  public function deleteFile() {
    
  }
}
