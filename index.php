<?session_start();
require_once "pages/conectDB.php";
//  $query = "Insert into users (name, password) values ('ADMIN', '".md5('abrikos')."')";
//  mysql_query($query);
  $name = mysql_real_escape_string($_POST["login_field"]);
  $password = mysql_real_escape_string($_POST["password_field"]);

  if ($name && $password) {
    $sql = "select * from users where name='".$name."' and password='".md5($password)."'";
    $result = mysql_query($sql);
    $_SESSION['$user'] = mysql_fetch_assoc($result);
  }
?>

<html>
<head>
  <?php
  $title="Главная";
  require_once "pages/title.php";
   ?>

</head>
<body>
  <?php
  $select = 'Index';
  require_once "pages/header.php"?>
<div class="site_content">
<div class="content">
  <h1>Популярное</h1>
  <div class="books">
    <?  $query = "select * from books order by rating DESC limit 4 ";
      $result = mysql_query($query);
      while ($row = mysql_fetch_assoc($result)) {
        echo "<a href='show.php?id=".$row["id"]."'><img src='".$row["img"]."'></a>";
      }
      ?>
  </div>

  <h1>Новые экранизации</h1>
  <div class="books">
  <?  $query = "select * from books order by year DESC limit 4 ";
    $result = mysql_query($query);
    while ($row = mysql_fetch_assoc($result)) {
      echo "<a href='show.php?id=".$row["id"]."'><img src='".$row["img"]."'></a>";
    }
    ?>

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
