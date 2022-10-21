<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background-color: ;">
    <main>
        <div class="singIn">
            <img src="./img/LogoNewColor.png" alt="">
            <div class="loginEmail">
                <h4>Email</h4>
                <input type="email" name="email" id="inputEmail">
            </div>
            <div class="loginPas">
                <h4>Password</h4>
                <input type="password" name="password" id="inputPassword">
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <div class="loginRedrection">
                <input type="submit" value="Entrar">
                <hr>
                <h4>não tem uma conta?</h4>
                <a href="signup.php"><h4>Registre-se</h4></a>
            </div>
        </div>
    </main>
    <script src="./assets/js/script.js"></script>
</body>
</html>