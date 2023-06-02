<?php
// Проверка, была ли отправлена форма регистрации
if (isset($_POST["send"])) {
	// Получение данных из формы
	$tel = $_POST["tel"];
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$pass = $_POST["pass"];

	// Подключение к базе данных 
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "love";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	$conn->set_charset('utf8');

	// Проверка соединения с базой данных
	if ($conn->connect_error) {
		die("Ошибка соединения: " . $conn->connect_error);
	}

	// Проверка, существует ли пользователь с таким же именем
	$select_user_sql = "SELECT * FROM registr WHERE tel = '$tel'";
	$select_user_result = $conn->query($select_user_sql);

	if ($select_user_result->num_rows > 0) {
		$error_massage = "пользователь уже существует";
	} else {
		// Хеширование пароля
		$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

		// Вставка нового пользователя в базу данных
		$insert_user_sql = "INSERT INTO registr (name, surname, tel, pass) VALUES ('$name','$surname', '$tel', '$hashed_password')";

		if ($conn->query($insert_user_sql) === TRUE) {
			header('LOCATION: profile.php');
		} else {
			$error_massage = "Ошибка регистрации: " . $conn->error;;
		}
	}

	$conn->close();
}