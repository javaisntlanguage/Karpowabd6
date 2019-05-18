<?php
include_once 'connection.php';
$countries = getDataFromDb();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страны и их популяция</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
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
        <?php foreach ($countries as $country):?>
            <tr>
                <td><?=htmlspecialchars($country['countryName'],ENT_HTML5)?></td>
                <td><?=htmlspecialchars($country['populationCount'],ENT_HTML5)?></td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<form method="post" action="">
    <h3>Введите данные о стране</h3>
    <label for="name">Название страны</label>
    <input type="text" name="name"  autocomplete="off" required>
    <label for="population">Популяция</label>
    <input type="text" name="population"  autocomplete="off" required>
    <input class="btn-primary" type="submit" name="submit" value="Добавить">
</form>
</body>
<!-- adding attributes for input -->
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/checking.js"></script>
</html>
<?php include_once 'send.php'?>
