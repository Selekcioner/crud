<?php
require_once "../config/connect.php";
$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM doctor WHERE `doctor`.`id` = $id" );

header(`Location: ../index.php`);