<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Форматируем строку для записи
    $date = date('Y-m-d H:i:s');
    $entry = "Дата: $date\nИмя: $name\nEmail: $email\nСообщение: $message\n---\n";

    // Запись в файл (файл feedback.txt в той же папке)
    file_put_contents('feedback.txt', $entry, FILE_APPEND);

    // Можно вывести сообщение или перенаправить
    echo "Спасибо за ваше сообщение!";
} else {
    echo "Некорректный запрос.";
}
?>