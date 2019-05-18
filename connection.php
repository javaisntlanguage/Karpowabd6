<?php
try //подключение к бд и создание (таблицы стран)
{
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "",
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    $pdo->query("CREATE TABLE IF NOT EXISTS countries(
     id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     countryName VARCHAR( 255 ) NOT NULL, 
     populationCount INT( 11 ) NOT NULL);");
}
catch (PDOException $exception)
{
    die($exception->getMessage());
}
/**
 *функция получения данных из таблицы стран
 * @return array
 */
function getDataFromDb()
{
    global $pdo;
    return $pdo->query('SELECT * FROM countries')->fetchall();
}