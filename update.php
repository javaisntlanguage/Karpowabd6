<?php
include_once 'logic/connection.php';
$countries = getDataFromDb();
if (@$_POST['update']) //если строки для ввода не пустые
{
    $insert = $pdo->prepare("UPDATE enterprises SET name_enterprises = ?, address = ?, phone_number = ? WHERE name_enterprises = ?");
    $insert->execute([
        @$_POST['name_enterprises'],
        @$_POST['address'],
        @$_POST['phone_number'],
        @$_POST['enterprise']
    ]);
    header('Location: index.php');
}