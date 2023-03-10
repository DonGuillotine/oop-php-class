<?php
include "namespaces.php";

use Html as H;

use Html\Table as T;


$table = new T();
$table->title = "My tablez";
$table->numRows = 5;

$row = new H\Row();
$row->numCells = 3;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $table->message();?></title>
</head>
<body>
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>
</html>