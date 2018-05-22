<?php $mysql = mysql_connect('localhost', 'root', '');
if (!$mysql) {
  die ("Невозможно подключение к MySQL");
}
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_select_db ( 'admin' ) or die ("Невозможно открыть $db");
?>
