<?php
$conn = mysqli_connect("localhost", "root", "","crud");
if ($conn === false) {
    die("Ошибка: " . mysqli_connect_error());
}

