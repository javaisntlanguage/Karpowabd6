<?php
include_once 'logic/connection.php';
$countries = getDataFromDb();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страны и их популяция</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-4.3.1-dist/css/dashboard.css" rel="stylesheet">
</head>
<body>
<h2>Страны</h2>
<div class="table-hover">
    <table class="table table-striped table-my">
        <thead>
        <tr>
            <th>Название страны</th>
            <th>Популяция</th>
        </tr>
        </thead>
        <tbody>
        <!-- вывод информации -->
        <?php foreach ($countries as $country):?>
            <tr>
                <td><?=htmlspecialchars($country['countryName'],ENT_HTML5)?></td>
                <td><?=htmlspecialchars($country['populationCount'],ENT_HTML5)?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<form class="form" method="post" action="" onsubmit="return confirm('Подтвердите добавление')">
    <h3>Введите данные о стране</h3>
    <label for="name">Название страны</label>
    <input type="text" name="name"  autocomplete="off" required pattern="([а-яА-ЯёЁ]+\s?)+">
    <label for="population">Популяция</label>
    <input type="text" name="population"  autocomplete="off" required pattern="^[0-9]+$">
    <input class="btn-primary" type="submit" name="submit" value="Добавить">
</form>
</body>
</html>
<?php include_once 'logic/send.php' ?>
