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

function generateRandomId($length = 9)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomId = '';
    for ($i = 0; $i < $length; $i++) {
        $randomId .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomId;
}

function register() {
    global $connection;
    $id = generateRandomId();
    $name = stripcslashes($_POST["name"]);
    $email = stripslashes($_POST["email"]);
    $address = stripslashes($_POST["address"]);
    $phone = stripslashes($_POST["phone"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);
    $confirmPass = mysqli_real_escape_string($connection, $_POST["confirm-password"]);
    $readyAcc = getData("SELECT * FROM users WHERE email = '$email'");
    if ($password !== $confirmPass) {
        echo "
        <script>
        alert('password tidak sesuai');
        </script>
        ";
        return false;
    }
    if ($readyAcc) {
        if ($email === $readyAcc[0]["email"]) {
            echo "
            <script>
            alert('Email sudah terdaftar');
            </script>
            ";
            return false;
        }
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (np, name, email, address, phone, password, isAdmin) VALUES ('$id','$name','$email','$address','$phone','$password','false')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

function setTransaction($id) {
    global $connection;
    $user = $_SESSION['auth']['np'];
    $bundle = getData("SELECT * FROM bundles WHERE id = '$id'")[0];
    $bundleName = $bundle['name'];
    $bundlePrice = $bundle['price'];
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO transactions (id, user_np, paket, tanggal, total) VALUES ('','$user','$bundleName','$date','$bundlePrice')";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}

function deleteCustomer($np) {
    global $connection;
    $query = "DELETE FROM users WHERE np = '$np'";
    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}