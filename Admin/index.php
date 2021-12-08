<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style2.css">
    <title>Login</title>
</head>
<body>
    <main>
        <h3>Autenticação para o CMS</h3>
        <p>Ric Games</p>
        <form action="autenticar.php" name="frmCadastro" method="post">
            <label>
                Login:
            </label>
            <input type="text" name="txtLogin" valu="" placeholder="Insira seu Login">
            <label>
                Senha:
            </label>
            <input type="password" name="txtSenha" value="" placeholder="Insira sua Senha">
            
            <input type="submit" name="btnSalvar" value="Login" id="botao">
        </form>
    </main>
</body>
</html>