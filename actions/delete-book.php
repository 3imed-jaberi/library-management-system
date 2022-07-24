<?php

include "../db-manager/port.php";

$sql = "DELETE FROM books WHERE id = :id";
$sqlParams = ["id" => $_GET['id']];
$isDeleted = $modelManager->mutation($sql, $sqlParams);

if (!$isDeleted) echo($isDeleted);
else header('location: http://localhost/index.php');
