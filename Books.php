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
  $select = 'Books';
  require_once "pages/header.php"?>
<div class="site_content">
<div class="content">

<?php
$query = "select * from books";
  $result = mysql_query($query);
  while ($row = mysql_fetch_assoc($result))
echo
  "<div class='info_book'>".
    "<img src=".$row["img"]."><div class='info_book_description'>".
   $row["description"].
    "</div><div class='button'>
      <a href='show.php?id=".$row["id"]."'>Смотреть</a>
    </div>
  </div>"
?>


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
