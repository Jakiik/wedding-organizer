<?php
session_start();
require("../../../../module/modul.php");

$np = $_GET["np"];
if (deleteCustomer($np) > 0) {
    header("Location: http://localhost/wedding-organizer/views/dashboard/customer/");
} else {
    echo "
    <script>
        alert('data gagal dihapus');
    </script>
    ";
}
