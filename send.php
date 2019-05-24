<?php
include_once 'logic/connection.php';
$countries = getDataFromDb();
if (@$_POST['submit']) //если строки для ввода не пустые
{
    $insert = $pdo->prepare("INSERT INTO enterprises (name_enterprises, address, phone_number) VALUES(?, ?, ?)");
    $insert->execute([
        @$_POST['name_enterprises'],
        @$_POST['address'],
        @$_POST['phone_number']
    ]);
    header('Location: index.php');
}
