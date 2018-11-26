<?php

require 'pdo.php';

$fetch_all_images_statement = $pdo->prepare("SELECT * FROM images");
$fetch_all_images_statement->execute();
$all_images = $fetch_all_images_statement->fetchAll(PDO::FETCH_ASSOC);