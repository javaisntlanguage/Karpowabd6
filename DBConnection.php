<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_LAZY
        ]);
}
catch (PDOException $exception)
{
echo "Не удалось подключиться к базе<br>Ошибка: ".$exception->getMessage();
die();
}
$countries = $pdo->query('SELECT * FROM countries');
?>