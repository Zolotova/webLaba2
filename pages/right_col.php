  <div class="sidebar_container">

    <div class="sidebar">

      <h2>Поиск</h2>
      <form method="post" action="search.php" id="search_form">
        <input type="search" name="search_field" placeholder="ваш запрос" />
        <input type="submit" class="btn" value="найти" />

      </form>

    </div>
    <div class="sidebar">
    
      <h2>Вход</h2>
      <form method="post" action="/index.php" id="login">
        <input type="text" name="login_field" placeholder="логин" autocomplete="off"  />
        <input type="password" name="password_field" placeholder="пароль" autocomplete="off" />
        <input type="submit" class="btn" value="вход" onclick="document.getElementById("login").submit(); clean()"/>
        <div class="lables_passreg_text">
          <span><a href="#">Забыли пароль?</a></span> | <span><a href="#">Регистрация</a></span>

        </div>
      </form>
    </div>

    <div class="sidebar">
      <h2>Новости</h2>
      <span>31.02.2016</span>
      <p>Мы запустили расширенный поиск</p>
      <a href="#">читать</a>
    </div>

    <div class="sidebar">
      <h2>Рейтинг фильмов</h2>
      <ul>
        <?php
        $query = "select * from books order by rating DESC limit 4 ";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
          echo
        "<li><a href='show.php?id=".$row["id"]."'>".$row["title"]."</a><span class='rating_sidebar'>".$row["rating"]."</span></li>"
        ."<hr/>";
      } ?>
      </ul>
    </div>


  </div>
