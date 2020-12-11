<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = "juan@gmail.com";
        $passwd = "juan";
        $inputUser  = htmlspecialchars($_POST["email"]);
        $inputPasswd = htmlspecialchars($_POST["passwd"]);
        if ($inputUser === $user && $inputPasswd == $passwd) {
            header("Location: menu.php");
        }
        else {
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    .cont {
        display: flex;
        justify-content: center;
    }
    .login {
        width: auto;
        font-family: "Segoe UI", Roboto, sans-serif;
        text-align: center;
    }
</style>
<body>
    <div class="cont">
        <div class="login">
            <h1>Página de login (contínuo)</h1>
            <form method="post" action="index.php">
                <input type="text" name="email" placeholder="Email"> <br />
                <input type="password" name="passwd" placeholder="Contraseña"> <br />
                <input type="submit" name="submit" value="Iniciar sesión">
            </form>
        </div>
    </div>
</body>
</html>
