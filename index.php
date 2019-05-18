<?php include_once 'connection.php'?>
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
<h2><?=htmlspecialchars($countriesName, ENT_HTML5)?></h2>
<div class="table-responsive">
    <table class="table table-striped table-sm ">
        <thead>
        <tr>
            <?php foreach ($countriesColumnsName as $columnName): ?>
             <th><?=htmlspecialchars($columnName,ENT_HTML5)?></th>
            <?php endforeach?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($countries as $country):?>
        <tr>
            <?php foreach ($country as $countryInformation):?>
            <td><?=htmlspecialchars($countryInformation,ENT_HTML5)?></td>
            <?php endforeach?>
        </tr>
        <?php endforeach?>
        </tbody>
    </table>
</div>
<form class="" method="post" action="">
    <h3>Введите данные о стране</h3>
    <?php foreach ($countriesColumnsName as $columnName): ?>
        <?php if ($columnName!='id'):?>
        <label for="<?=htmlspecialchars($columnName,ENT_HTML5)?>"><?=htmlspecialchars($columnName,ENT_HTML5)?></label>
        <input type="text" name="<?=htmlspecialchars($columnName,ENT_HTML5)?>"  autocomplete="off" required>
        <?php endif?>
    <?php endforeach?>
    <input class="btn-primary" type="submit" name="submit" value="Добавить">
</form>
</body>
<!-- adding attributes for input -->
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/checking.js"></script>
</html>
<?php include 'send.php'?>
