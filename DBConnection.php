<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        [
            //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_LAZY
        ]);
}
catch (PDOException $exception)
{
echo "Не удалось подключиться к базе<br>Ошибка: ".$exception->getMessage();
die();
}
$countries = $pdo->query('SELECT * FROM countries')->fetchall(PDO::FETCH_ASSOC);
$tablesName = $pdo->query('SHOW TABLES from test')->fetch();
$countriesName = mb_convert_case($tablesName[0],MB_CASE_TITLE);
$countriesColumnsName = $pdo->query('DESCRIBE countries')->fetchAll(PDO::FETCH_COLUMN);
