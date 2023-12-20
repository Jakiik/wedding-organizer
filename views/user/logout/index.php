<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: http://localhost/wedding-organizer/views/user/login");
    exit;
}
$_SESSION = [];
session_unset();
session_destroy();
setcookie("np", "");
setcookie("key", "");
header("Location: http://localhost/wedding-organizer/");
