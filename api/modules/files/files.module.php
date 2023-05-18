<?php
require_once '../../handlers/FilesHandler.php';
session_start();

$filesHandler = new FilesHandler(null);
return $filesHandler->getFiles();


?>
<div class="text-center mr-5">
  <button class="btn btn-primary">Добавить</button>
</div>
<table class="table">


  <thead>
    <tr>
      <th>Имя файла</th>
      <th>Тип</th>
      <th>Размер</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach ($files as $file) : ?>

      

    <?php endforeach; ?>
    <?php echo $files; ?>
    <!-- <tr>
      <td>example.jpg</td>
      <td>Изображение</td>
      <td>2.3 MB</td>
      <td>
        <a href="#" class="btn btn-primary">Скачать</a>
        <a href="#" class="btn btn-danger">Удалить</a>
      </td>
    </tr>
    <tr>
      <td>document.pdf</td>
      <td>Документ</td>
      <td>1.5 MB</td>
      <td>
        <a href="#" class="btn btn-primary">Скачать</a>
        <a href="#" class="btn btn-danger">Удалить</a>
      </td>
    </tr> -->

  </tbody>
</table>