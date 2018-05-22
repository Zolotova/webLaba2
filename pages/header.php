  <header>

    <div class="logo">

      <div class="logo_main">
          <a href="index.php"><img src="assets/img/logo.png"></a>

          <h1><a href="index.php">BookOrFilm</a></h1>

          <a href="index.php"><img src="assets/img/logo2.jpg"></a>
      </div>


    <div class="logo_text" class="logo_text2">
      <h2>Книга или фильм?</h2></div>
  </div>

  <ul class="menu">

    <li <?echo($select == 'Index') ? "class='selected'" : ""?>><a href="index.php">Главная</a></li>
    <li <?echo($select == 'Books') ? "class='selected'" : ""?>><a href="Books.php">Фильмы</a></li>
    <li <?echo($select == 'Rating') ? "class='selected'" : ""?>><a href="rating.php">Рейтинг</a></l>
    <li <?echo($select == 'Contact') ? "class='selected'" : ""?>><a href="contacts.php">Контакты</a></li>

  </ul>
</header>
<?php require_once "pages/conectDB.php";
 ?>
