<?php

include "../db-manager/port.php";

$sql = "INSERT INTO books (title, author, published, price, category) VALUES (:title, :author, :published, :price, :category)";
$sqlParams = [
  "title" => $_POST['title'],
  "author" => $_POST['author'],
  "published" => $_POST['published'],
  "price" => $_POST['price'],
  "category" => $_POST['category']
];
$isAdded = $modelManager->mutation($sql, $sqlParams);

if (!$isAdded) echo($isAdded);
else header('location: http://localhost/index.php');
