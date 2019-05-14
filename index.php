<?php
include_once 'DBConnection.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Добавление страны</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="bootstrap-4.3.1-dist/css/dashboard.css" rel="stylesheet">

</head>
<body>
<h2><?=$countriesName?></h2>
<div class="table-responsive">
    <table class="table table-striped table-sm ">
        <thead>
        <tr>
            <?php foreach ($countriesColumnsName as $columnName): ?>
             <th><?=$columnName?></th>
            <?php endforeach;?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($countries as $country):?>
        <tr>
            <?php foreach ($country as $countryInformation):?>
            <td><?=$countryInformation?></td>
            <?php endforeach?>
        </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
</main>
</div>
</div>

</body>
</html>
