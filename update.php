<?php
require_once "D:/OSPanel/domains/crud/config/connect.php";
$doctor_id = $_GET[`id`];
$conn = mysqli_connect("localhost", "root", "","crud");
$doct = mysqli_query($conn, "SELECT * FROM `doctor` WHERE `id` = `$doctor_id`");
$doct = mysqli_fetch_assoc($doct);
//print_r($doct);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Редактировать данные</h2>
<form action="vendor/create.php" method="post">
    <input type="hidden" name="id" value="<?= $doct['id'] ?>">
    <p>ИмяФамилия</p>
    <input type="text" name="title"> value = "<?= $doct[`title`]?>">
    <p>Описание</p>
    <textarea name="description"> <?= $doct[`description`]?> </textarea>
    <p>Цена</p>
    <input type="number" name="price"> value = "<?= $doct[`price`]?>">
    <button type="submit">Сохранить изменения</button>
</form>

</body>
</html>

