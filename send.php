<?php
    if (isset($_POST['submit']) && @$_POST[$countriesColumnsName[1]] && @$_POST[$countriesColumnsName[2]])
    {
        $insert = $pdo->prepare("INSERT INTO countries (name, population) VALUES(?, ?)");
        $insert->execute([
            @$_POST[$countriesColumnsName[1]],
            @$_POST[$countriesColumnsName[2]]
        ]);
        header('Location: index.php');
    }
