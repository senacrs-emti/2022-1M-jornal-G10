<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background-color: #1A2875;">
    <main>
        <form action="#">
        <div class="login">
            <img src="img/LogoNewColor.png" alt="">
            <div class="inputEmail">
                <h4>Email</h4>
                <input type="email" name="loginEmail" id="loginEmail" placeholder="Digite seu email">
            </div>
            <div class="inputPassword">
                <h4>Senha</h4>
                <input type="loginPassword" name="loginPassword" id="inputPassword" placeholder="Digite sua senha">
                <a href="forgotpassword.php"><h5>Esqueceu sua senha?</h5></a>
            </div>
            <div class="loginButton">
                <input type="submit" value="Sign-in">
            </div>
            <div class="redirectionPage">
                <hr>
                <h3>Não possui uma conta?</h3>
                <a href="signup.php"><h3>Registre-se</h3></a>
            </div>
        </div>
        </form>
    </main>
    <script src="./assets/js/script.js"></script>
</body>
</html>