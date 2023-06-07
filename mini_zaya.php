<?php
session_start();
// Подключение к базе данных
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'love';

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($connection, 'utf8');

// Проверка соединения
if (!$connection) {
	die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка отправленной формы
if (isset($_POST['submit3'])) {

	if (isset($_SESSION['name1']) && isset($_SESSION['surname1']) && isset($_SESSION['tel1'])) {
    $name3 = $_SESSION['name1'];
    $surname3 = $_SESSION['surname1'];
    $tel3 = $_SESSION['tel1'];
} else {
    echo "НЕт сессии!!";
}

	$date3 = $_POST["date3"];
	$time3 = $_POST["time3"];
	$procedure3 = $_POST["procedure3"];

	// Вставка данных в базу данных
	$query = "INSERT INTO zaya (name, surname, tel, date, time, proc) 
		VALUES ('$name3', '$surname3', '$tel3', '$date3', '$time3', '$procedure3')";

	if (mysqli_query($connection, $query)) {
		$massage = "Форма отправлена";

		
	} else {
		$massage = "Ошибка при отправке: " . mysqli_error($connection);

	}
}

// Закрытие соединения с базой данных
mysqli_close($connection);
?>