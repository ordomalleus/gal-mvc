<?php

  header('Content-Type: text/html; charset=utf-8');
  
  //счетчик рядов 
  $i = 0;
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Views/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Views/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="Views/css/colorbox.css" rel="stylesheet" type="text/css"/>
    <link href="Views/css/my.css" rel="stylesheet" type="text/css"/>
    <script src="Views/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="Views/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Views/js/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="Views/js/my.js" type="text/javascript"></script>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <?php require __DIR__.'/form.php';?>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php foreach ($items as $item): ?>
              <?php if ($i % 4 === 0): ?>
                <div class="row">
              <?php endif; ?>
              <div class="col-md-3">
                <a href="<?php echo $item['path']; ?>" class="gallery">
                  <img src="<?php echo $item['path']; ?>" class="img-responsive img-thumbnail" alt="<?php echo $item['title']; ?>" />
                </a>
              </div>
              <?php $i++; ?>
              <?php if ($i % 4 === 0): ?>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<?php 
  unset($i);
?>