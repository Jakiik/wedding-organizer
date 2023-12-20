<?php
session_start();
require("../../../module/modul.php");
if (isset($_COOKIE["np"]) && isset($_COOKIE["key"])) {
    $np = $_COOKIE["np"];
    $key = $_COOKIE["key"];
    if ($key === hash("sha224", getData("SELECT * FROM users WHERE np = '$np'")[0]["email"])) {
        $_SESSION["login"] = "true";
    }
}

if (isset($_SESSION["login"])) {
    $email = $_COOKIE["np"];
    $isAdmin = getData("SELECT `isAdmin` FROM users WHERE email = '$email'")[0];
    echo $isAdmin;
    if ($isAdmin == 1) {
        header("Location: http://localhost/wedding-organizer/views/dashboard/");
    } else {
        header("Location: http://localhost/wedding-organizer/");
    }
    exit;
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userAuth = getData("SELECT * FROM users WHERE email = '$email'")[0];
    if ($userAuth) {
        $_SESSION["auth"] = $userAuth;
        if (password_verify($password, $userAuth["password"])) {
            $_SESSION["login"] = true;

            if ($_POST["remember"]) {
                setcookie("id", $userAuth["id"], time() + 3000000);
                setcookie("key", hash("sha224", $userAuth["email"]), time() + 3000000);
            }

            if ($userAuth["isAdmin"] == 1) {
                header("Location: http://localhost/wedding-organizer/views/dashboard/");
            } else {
                header("Location: http://localhost/wedding-organizer/");
            }
            exit;
        } else {
            echo "
            <script>
            alert('email atau password salah.');
            </script>
            ";
        }
    } else {
        echo "
        <script>
        alert('email atau password salah.');
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($error_message)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error_message; ?>
                            </div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" name="email" required value="axnvee18@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required value="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Rememberme</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                        <div class="pt-3">
                            <span>Belum memiliki akun?</span>
                            <a href="http://localhost/wedding-organizer/views/user/register/">Registrasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>