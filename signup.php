<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body style="background-image: linear-gradient(to right, #1A2875, black);">
    <main>
        <form action="#">
        <div class="register">
            <img src="img/LogoNewColor.png" alt="">
            <div class="registerUser">
                <h3>Usuario</h3>
                <input type="text" name="registerUser" id="registerUser" placeholder="Digite seu nome" required>
                <label for="name"></label>
            </div>
            <div class="registerEmail">
                <h3>Email</h3>
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                <label for="email"></label>
            </div>
            <div class="registerPassword">
                <h3>Senha</h3>
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="registerButton">
                <input type="submit" value="Registrar-se">
            </div>
        </div>
        </form>
    </main>

    <script src="./assets/js/script.js"></script>
</body>
</html>