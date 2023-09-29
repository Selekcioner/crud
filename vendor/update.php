<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

mysqli_query($conn, "UPDATE `doctor` SET `title` = '$title', `text` = '$description', `price` = '$price' WHERE `doctor`.`id` = $id");

header('Location: /');