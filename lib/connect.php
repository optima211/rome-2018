<?
include ('config.inc.php');
//@mysql_connect(DB_SERVER, DB_USER, DB_PASS)
//	or die ("Ошибка подключения к базе данных");
//@mysql_select_db(DB_DATABASE);
//$link = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE) or die('Could not connect: ' . mysql_error());

$mysqli = new mysqli($DB_SERVER, DB_USER, DB_PASS, DB_DATABASE) or die('Could not connect: ' . mysql_error()); //php7 // ('127.0.0.1', 'root', 'пароль', 'база')
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
    echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";
    exit;
}
?>