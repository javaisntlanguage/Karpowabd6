<?php
if (@$_POST['name'] && @$_POST['population']) //если строки для ввода не пустые
{
    $insert = $pdo->prepare("INSERT INTO countries (countryName, populationCount) VALUES(?, ?)");
    $insert->execute([
        @$_POST['name'],
        @$_POST['population']
    ]);
    header('Location: index.php');
}
