<?php 
require_once '../handlers/FilesHandler.php';

session_start();

$filesHandler = new FilesHandler(null);
$files = $filesHandler->downloadFile();

echo json_encode($files);