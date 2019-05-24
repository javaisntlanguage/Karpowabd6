<?php
include_once 'logic/connection.php';
$countries = getDataFromDb();
foreach ($countries as $country)
{
    @$id = $_POST[$country['id_enterprises']];
    if (isset($id)) {
        $id = $country['id_enterprises'];
        $delete = $pdo->prepare("DELETE FROM enterprises WHERE id_enterprises=?");
        try {
            $delete->execute([$id]);
            header("Location: index.php");
        }
        catch (PDOException $exception)
        {
            $_SESSION['error'] = "невозможно удалить";
            header("Location: index.php?error=".$_SESSION['error']);
        }

    }
}