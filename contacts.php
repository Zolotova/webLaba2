<!DOCTYPE html>
<html>
<head>
  <?php
  $title="Книги";
  require_once "pages/title.php";
   ?>

</head>
<body>
  <?php
  $select = 'Contact';
  require_once "pages/header.php"?>
<div class="site_content">
<div class="content">
  <h1>Контакты</h1>
  <p>Отправьте ваш отзыв о портале Кинобукс</p>
  <div class="send">
    <form method="post" action="#" id="review">
      <input type="text" name="review_name" placeholder="ваше имя">
      <input type="text" name="review_email" placeholder="ваш email">
      <textarea name="review_text"></textarea>
      <input type="submit" class="btn" value="отправить"  content>
    </form>
  </div>

</div>
<?php
require_once "pages/right_col.php"
 ?>

</div>

</div>
  <?php
  require_once "pages/footer.php"?>
</body>
</html>
