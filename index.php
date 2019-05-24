<?php
include_once 'logic/connection.php';
$countries = getDataFromDb();
$nameEnterprises = getNameEnterprises();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>предприятия</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-4.3.1-dist/css/dashboard.css" rel="stylesheet">
    <style>
        input[name=id_enterprises] {
            color:blue;
        }
    </style>
</head>
<body>
<h2>Предприятия</h2>
<div class="table-hover position-relative">
    <table class="table table-striped table-my">
        <thead>
        <tr>
            <?php foreach ($countries[0] as $key=>$country):?>
            <th><?=htmlspecialchars($key,ENT_HTML5)?></th>
        <?php endforeach?>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <!-- вывод информации -->
        <?php foreach ($countries as $key=>$country):?>
            <tr>
                <?php foreach ($country as $order): ?>
                <td><?=htmlspecialchars($order,ENT_HTML5)?></td>
                <?php endforeach;?>
                <td class="form-inline">
                    <form action="delete.php" method="post">
                   <input type="submit" class="btn-danger" name=<?=$country['id_enterprises']?> value="удалить">
                    </form>
                </td>
            </tr>
        <?php endforeach?>
        </tbody>
    </table>
   <?php if (isset($_GET['error'])) : echo $_GET['error']; endif;?>

</div>
<form method="post" action="" onsubmit="return confirm('Подтвердите добавление')">
    <h3>Введите данные о предприятии</h3>
    <?php foreach ($countries[0] as $key=>$orders):?>
    <?php if ($key!="id_enterprises"):?>
    <label for=<?=htmlspecialchars($key, ENT_HTML5)?>><?=htmlspecialchars($key, ENT_HTML5)?></label>
    <input type="text" name=<?=htmlspecialchars($key, ENT_HTML5)?>  autocomplete="off" required pattern="([a-zA-Z0-9]+\s?)+">
        <?php endif;?>
    <?php endforeach;?>
    <input class="btn-success" type="submit" name="submit" value="Добавить">
</form>
<form method="post" action="update.php">
    <h3>Введите данные для обновления</h3>
    <label>Выберите предприятие</label>
    <select name="enterprise">
        <?php foreach ($nameEnterprises as $enterprises):?>
            <?php foreach ($enterprises as $enterprise):?>
                <option value = "<?=$enterprise?>"><?=$enterprise?> </option>
            <?php endforeach;?>
        <?php endforeach;?>
    </select><br>
    <?php foreach ($countries[0] as $key=>$orders):?>
    <?php if ($key!="id_enterprises"):?>
        <label for=<?=htmlspecialchars($key, ENT_HTML5)?>><?=htmlspecialchars($key, ENT_HTML5)?></label>
        <input type="text" name=<?=htmlspecialchars($key, ENT_HTML5)?>  autocomplete="off" required pattern="([a-zA-Z0-9]+\s?)+">
    <?php endif;?>
    <?php endforeach;?>
    <input class="btn-primary" type="submit" name="update" value="Обновить">
</form>
<script src="new.js"></script>
</body>
</html>
<?php include 'send.php';
include 'delete.php';
$countries = serialize($countries);?>
