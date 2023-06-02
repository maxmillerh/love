<?php

// Проверка, была ли отправлена форма авторизации
if (isset($_POST["send1"])) {
	// Получение данных из формы
	$tel1 = $_POST["tel1"];
	$pass1 = $_POST["pass1"];

	// Подключение к базе данных 
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "love";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	$conn->query("SET_NAME * 'UTF8'");

	// Проверка соединения с базой данных
	if ($conn->connect_error) {
		die("Ошибка соединения: " . $conn->connect_error);
	}

	// Поиск пользователя в базе данных
	$select_user_sql = "SELECT * FROM registr WHERE tel = '$tel1'";
	$select_user_result = $conn->query($select_user_sql);

	if ($select_user_result->num_rows == 1) {
		$user = $select_user_result->fetch_assoc();
		// Проверка пароля
		if (password_verify($pass1, $user["pass"])) {
			// Успешный вход, перенаправление на другую страницу
			header(('LOCATION: profile.php'));
		} else {
			// Неправильный пароль
			$error_massage = "Неверный пароль";
		}
	} else {
		$error_massage = "пользователь не найден";
	}

	$conn->close();
}
