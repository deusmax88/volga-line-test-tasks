<?php

function load_users_data($user_ids)
{
    global $db;

    $data = [];
    // В запросе нужно указывать только ту информацию, которая реально нужна
    $sql = mysqli_query($db, "SELECT `id`, `name` FROM users WHERE id=$user_ids");

    while ($arr = $sql->fetch_assoc()) {
        $data = $data + $arr;
    }

    return $data;
}

// Как правило, в $_GET['user_ids'] должна приходить строка
// с номерами пользователей через запятую, например: 1,2,17,48

// И так первое нужно провалидировать приходящие нам данные
$requestedUserIds = $_GET['user_ids'];

if (!preg_match("/^\d+,[\d,]+,\d+$/", $requestedUserIds)) {
    // Корректно обработаем ошибку
    showError();
}

// Далее открыть соединения с БД
$db = mysqli_connect('localhost', 'root', '123123', 'database');

$data = load_users_data($requestedUserIds);

// Закрыть соединение с БД, если дальнейшее использование не предусматривается
mysqli_close($db);

foreach ($data as $user_id => $name) {
    echo "<a href=\"/show_user.php?id=$user_id\">$name</a>";
}

// Улучшать данный код можно бесконечно долго, главное, что мы как минимум закрыли SQL-injection
// и более экономно используем ресурсы