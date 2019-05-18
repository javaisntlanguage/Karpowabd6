<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
}
catch (PDOException $exception)
{
    die("Не удалось подключиться к базе<br>Ошибка: ".$exception->getMessage());
}
/**
* @return array
 */
function getDataFromDb()
{
    global $pdo;
    return $pdo->query('SELECT * FROM countries')->fetchall();
}