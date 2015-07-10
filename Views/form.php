<form id="upload-file" action="/Controller/addPhoto.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputFile">Загрузить Фотографию</label>
    <input type="file" id="exampleInputFile" name="img">
    <p class="help-block">Выбирите файл для загрузки</p>
  </div>
  <div class="form-group">
    <label for="exampleAlt">Имя для тега alt</label>
    <input type="text" class="form-control" id="exampleAlt" name="altName" placeholder="Имя для тега alt">
  </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>