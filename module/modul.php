<?php
$connection = mysqli_connect("localhost", "root", "", "wdo");

function getData($query) {
    global $connection;
    $data = [];
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}
