<?php
session_start();
require("../../../module/modul.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $bundle = getData("SELECT * FROM bundles WHERE id = '$id'")[0];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail</h1>

    <div>
        <h1><?= $bundle['name'] ?></h1>
    </div>
</body>
</html>