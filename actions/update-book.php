<?php

include "../db-manager/port.php";

$sql = "UPDATE books SET title=:title, author=:author, published=:published, price=:price, category=:category WHERE id = :id";
$sqlParams = [
  "title" => $_POST['title'],
  "author" => $_POST['author'],
  "published" => $_POST['published'],
  "price" => $_POST['price'],
  "category" => $_POST['category'],
  "id" => $_POST['id'],
];
$isUpdated = $modelManager->mutation($sql, $sqlParams);

if (!$isUpdated) echo($isUpdated);
else header('location: http://localhost/index.php');
