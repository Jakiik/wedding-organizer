<?php 
session_start();
require("../../../module/modul.php");

$id = $_GET["id"];
if (setTransaction($id) > 0) {
    header("Location: http://localhost/wedding-organizer/");
} else {
    echo "
    <script>
        alert('Gagal melakukan transaksi.');
    </script>
    ";
}