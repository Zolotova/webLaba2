<?php
  require_once "pages/conectDB.php";
  function search ($query)
  {
    $query = trim($query);
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query))
    {
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else {
            $q = "SELECT `title`, `img`, `producer`, `year`, `rating`, `id`, `description`
                  FROM `books` WHERE `title` LIKE '%$query%'
                  OR `description` LIKE '%$query%' OR `year` LIKE '%$query%'
                  OR `producer` LIKE '%$query%'";

            $result = mysql_query($q);

            if (mysql_affected_rows() > 0) {
                $row = mysql_fetch_assoc($result);
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {

                    $text .= "<div class='info_book'>".
                        "<img src=".$row["img"]."><div class='info_book_description'>".
                       $row["description"].
                        "</div><div class='button'>
                          <a href='show.php?id=".$row["id"]."'>Смотреть</a>
                        </div>
                      </div>";

                } while ($row = mysql_fetch_assoc($result));
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        }
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }
    return $text;
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

   <div class="books">
   <?     if (!empty($_POST['search_field'])) {
       $search_result = search ($_POST['search_field']);
       echo $search_result;
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
