<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){

/* Основные настройки */
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$DB_HOST  = "localhost";
$DB_NAME  = "gbook";
$DB_LOGIN  = "root";
$DB_PASSWORD  = "root";

$conn = mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);
/* Основные настройки */

/* Сохранение записи в БД */
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";

$result = mysqli_query($conn, $sql);

}

/* Сохранение записи в БД */

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<?php
/* Вывод записей из БД */
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$DB_HOST  = "localhost";
$DB_NAME  = "gbook";
$DB_LOGIN  = "root";
$DB_PASSWORD  = "root";

$conn = mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);

$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt
FROM msgs
ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_row($result)[0];

echo "<p>Всего записей в гостевой книге: $rows</p>";



/* Вывод записей из БД */
?>