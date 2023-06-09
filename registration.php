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

    $connection = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    $connection->set_charset('utf8');

    // Проверка соединения с базой данных
    if ($connection->connect_error) {
        die("Ошибка соединения: " . $connection->connect_error);
    }

    // Проверка, существует ли пользователь с таким же телефоном
    $select_user_sql = "SELECT * FROM registr WHERE tel = '$tel'";
    $select_user_result = $connection->query($select_user_sql);

    if ($select_user_result->num_rows > 0) {
        $error_message = "Пользователь уже существует";
    } else {
        // Хеширование пароля
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        // Вставка нового пользователя в базу данных
        $insert_user_sql = "INSERT INTO registr (name, surname, tel, pass, email) VALUES ('$name', '$surname', '$tel', '$hashed_password', NULL)";

        if ($connection->query($insert_user_sql) === TRUE) {
            header('LOCATION: index.php');
        } else {
            $error_message = "Ошибка регистрации: " . $connection->error;
        }
    }

    $connection->close();
}

