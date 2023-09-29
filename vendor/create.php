<?php
require_once "../config/connect.php";

$title = $_POST['title'];
$text= $_POST['text'];
$price = $_POST['price'];

mysqli_query($conn, "INSERT INTO `doctor` (`id`, `title`, `text`, `price`) VALUES (NULL, '$title', '$text', '$price')");

header(`Location: ../index.php`);