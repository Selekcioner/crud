<?php
require_once "config/connect.php";
$doctor = mysqli_query($conn, "SELECT * FROM `doctor`");
$doctor = mysqli_fetch_all($doctor);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<table>
<tr>
    <th>id</th>
    <th>ИмяФамилия</th>
    <th>Описание</th>
    <th>Цена</th>
    <th>&#9998;</th>
    <th>&#10006;</th>
</tr>
    <?php
    foreach ($doctor as $item){
        ?>

          <tr>
              <td><?=$item[0]?></td>
              <td><?=$item[1]?></td>
              <td><?=$item[2]?></td>
              <td><?=$item[3]?></td>
              <td><a  href="update.php?id=<?=$item[0]?>">Редактировать </a> </td>
              <td><a  href="vendor/dalete.php?id=<?=$item[0]?>">Удалить </a> </td>
    </tr>
    <?php
    }
    ?>
    </>

<h2>Добавить новый товар</h2>
<form action="vendor/create.php" method="post">
    <p>ИмяФамилия</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Цена</p>
    <input type="number" name="price">
    <button type="submit">Добавить</button>
</form>

</body>
</html>