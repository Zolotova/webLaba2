<html>
<head>
  <?php
  $title="Главная";
  require_once "pages/title.php";
   ?>

</head>
<body>
  <?php
  $select = 'Rating';
  require_once "pages/header.php"?>
<div class="site_content">
<div class="content">
  <table>
    <tr>
      <th></th>
      <th>Книги</th>
      <th class="center">Год</th>
      <th class="center">Рейтинг книги</th>
      <th class="center">Рейтинг фильма</th>
    </tr>
    <tr>
      <td class="center"><img src="assets/img/Braun6.jpg"></td>
      <td>1. <a href="show.html">Инферно</a></td>
      <td class="center">2016</td>
      <td class="center rating">8.1</td>
      <td class="center rating">8.7</td>
    </tr>
    <tr>
      <td class="center"><img src="assets/img/Bradbery2.jpg"></td>
      <td>2. <a href="show.html">Вино из одуванчиков</a></td>
      <td class="center">2016</td>
      <td class="center rating">7.9</td>
      <td class="center rating">8.0</td>
    </tr>
    <tr>
      <td class="center"><img src="assets/img/Oruell1.jpg"></td>
      <td>3. <a href="show.html">1984</a></td>
      <td class="center">2016</td>
      <td class="center rating">7.5</td>
      <td class="center rating">8.4</td>
    </tr>
    <tr>
      <td class="center"><img src="assets/img/Riggz2.jpg"></td>
      <td>4. <a href="show.html">Дом странных детей</a></td>
      <td class="center">2016</td>
      <td class="center rating">7.0</td>
      <td class="center rating">7.9</td>
    </tr>
  </table>
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
