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
$countries = $pdo->query('SELECT * FROM countries')->fetchall();
$tablesName = $pdo->query('SHOW TABLES from test')->fetch(PDO::FETCH_NUM);
$countriesName = mb_convert_case($tablesName[0],MB_CASE_TITLE);
$countriesColumnsName = $pdo->query('DESCRIBE countries')->fetchAll(PDO::FETCH_COLUMN);
