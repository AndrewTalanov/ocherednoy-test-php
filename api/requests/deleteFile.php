<?php 
require_once '../handlers/FilesHandler.php';

session_start();

echo $_DATA['name'];

$filesHandler = new FilesHandler(null);
$filesHandler->deleteFile();