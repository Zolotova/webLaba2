<?
  require_once "pages/conectDB.php";
  $id = intval($_GET[id]);
  $author = mysql_real_escape_string($_POST["review_name"]);
  $message = mysql_real_escape_string($_POST["review_text"]);

  if ($author && $message) {
    $sql = "insert into reviews (books_id, name, message) values ('".$id."', '".$author."', '".$message."')";
    mysql_query($sql);
    header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  } ?>
<html>
<head>
  <?php
  $title="Главная";
  require_once "pages/title.php";
   ?>

</head>
<body>
  <?php
  require_once "pages/header.php"?>

  <?php

$query = "select * from books where id = ".$id;
  $result = mysql_query($query);
  $row = mysql_fetch_assoc($result);

echo
"<div class='site_content'>
<div class='content'>
  <h1>".$row["title"]."</h1>
  <iframe width='560' height='315' src=".$row["trailer"]. " frameborder='0' allowfullscreen></iframe>

  <div class='info_film_page'>
    <span class='label'>рейтинг: </span><span class='value'>".$row["rating"]."</span>
    <span class='label'>год: </span><span class='value'>".$row["year"]."</span>
    <span class='label'>режиссер: </span><span class='value'>".$row["producer"]."</span>

  </div>

  <hr>
  <h2>Описание фильма ".$row["title"]."</h2>
  <div class='description_film'>
    <img src=".$row["img"].">".
    $row["description"].
  "</div>";

?>
  <hr>
  <h2>Отзывы</h2>
  <div class="reviews">
    <?php $query = "select * from reviews where books_id = ".$id;
      $result = mysql_query($query);
      while ($column = mysql_fetch_assoc($result)) {
        echo "<div class='review_name'>".$column["name"]."</div><div class='review_text'>".
        $column["message"]."</div>";
      } ?>
  </div>
  <div class="send">
    <form method="post" action="/show.php?id=<?=$row["id"]?>" method="post" id="review">
      <input type="text" name="review_name" placeholder="ваше имя" maxlength="20"/>
      <textarea name="review_text"></textarea>
      <input type="submit" value="отправить" />
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
