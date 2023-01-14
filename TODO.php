<html lang="en">
<head>
  <?php require_once 'blocks/head.php'; ?>
    <title>TODO</title>
</head>
<?php require_once 'public/check.php'; ?>
  <body>
  <?php require_once 'blocks/header.php'; ?>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="1" checked>
      <label class="form-1-label" for="1">
          Авторизация (логин пароль хранить в php, ajax) <br> Хранится в MySQL
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="2" checked>
      <label class="form-check-label" for="2">
          Личный кабинет после авторизации
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="3" checked>
      <label class="form-check-label" for="3">
          загружать файлы на сервер используя ajax<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="4" checked>
      <label class="form-check-label" for="4">
          в базе сформировать таблицу путей к файлам<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="5" checked>
      <label class="form-check-label" for="5">
          при загрузке файла путь к файлу добавлять в базу<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="6" checked >
      <label class="form-check-label" for="6">
          выводить список файлов в виде ссылок для скачивания<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="7" checked>
      <label class="form-check-label" for="7">
          скачивать файл из сервера только авторизованному пользователю скрывая оригинальный путь к файлу<br>
      </label>  
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="8" checked>
      <label class="form-check-label" for="8">
          закрыть доступ снаружи к папке с загруженными файлами<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="9" checked>
      <label class="form-check-label" for="9">
          Максимальный размер файла 500кб, расширения - JPG,PNG (проверяется на сервере)<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="10" checked>
      <label class="form-check-label" for="10">
          При успешной или неуспешной операции выводить соответствующее сообщение<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="11" checked>
      <label class="form-check-label" for="11">
          неавторизованному пользователю доступна только авторизация.<br>
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="12" checked>
      <label class="form-check-label" for="12">
          авторизованному - обзор списка всех файлов, загрузка файлов, скачивание файлов, выход из личного кабинета <br>
      </label>
  </div>
  <?php require_once 'blocks/footer.php' ?>

</body>
</html>