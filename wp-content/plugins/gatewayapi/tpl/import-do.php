<html>
<head>
  <title>Загрузка файлов на сервер</title>
</head>
<body>
 <h2>Загрузка файлов на сервер</h2>
 <form action="" method="post" enctype="multipart/form-data">
  Выберите файл:<br>
  <input type="file" name="filename"><br> 
  <input type="submit" value="Загрузить"><br>
 </form>
<?php
if($_FILES["filename"]["name"] != '')
{
 if($_FILES["filename"]["size"] > 1024*6*1024)
  {
  echo "<h3>Размер файла превышает 6 мегабайт</h3>";
  exit;
  }
  // Проверяем если загружен файл то перемещаем его из временной директории в директорию этого скрипта
 if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
  {
  move_uploaded_file($_FILES["filename"]["tmp_name"],$_FILES["filename"]["name"]);
  echo "<h3>Файл <font color='red'>" .$_FILES["filename"]["name"] ."</font> загружен</h3>";
  } else
  {
  echo "<h3>Ошибка загрузки файла</h3>";
  }
}
?>
</body>
</html>