<?php
// Подключение к базе данных
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'love';

$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
$connection -> query("SET_NAME * 'UTF8'");

// Проверка соединения
if (!$connection) {
	die("Ошибка подключения: " . mysqli_connect_error());
}

// Обработка отправленной формы
if (isset($_POST['submit'])) {
	$name2 = $_POST["name2"];
	$surname2 = $_POST["surname2"];
	$tel2 = $_POST["tel2"];
	$date2 = $_POST["date2"];
	$time2 = $_POST["time2"];
	$procedure2 = $_POST["procedure2"];

	// Вставка данных в базу данных
	$query = "INSERT INTO zaya (name, surname, tel, date, time, proc) 
		VALUES ('$name2', '$surname2', '$tel2', '$date2', '$time2', '$procedure2')";

	if (mysqli_query($connection, $query)) {
		$massage = "Форма отправлена";
		
	} else {
		$error_massage = "Ошибка при отправке: " . mysqli_error($connection);
	}
}

// Закрытие соединения с базой данных
mysqli_close($connection);
?>