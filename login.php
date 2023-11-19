<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {font-family: Arial, Helvetica, sans-serif; background-color: #003D91;}
        .container {width: 300px; padding: 16px; background-color: white; margin: 0 auto; margin-top: 100px; border: 1px solid black; position: relative;}
        img.logo {max-width: 100%; height: auto; max-height: 100px; display: block; margin: 0 auto 20px;}

        input[type=text], input[type=password] {width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; box-sizing: border-box;}
        button {background-color: #478039; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;}
        button:hover {opacity: 0.8;}
    </style>
</head>
<body>

<form method="post" action="login_process.php">
    <div class="container">
        <img src="https://faculdadecdl.edu.br/wp-content/uploads/2018/09/logo-f-cdl.png" alt="Logo da Empresa" class="logo">
        <label for="uname"><b>Usuário</b></label>
        <input type="text" placeholder="Insira Usuário" name="uname" required>

        <label for="psw"><b>Senha</b></label>
        <input type="password" placeholder="Insira Senha" name="psw" required>

        <button type="submit">Login</button>
    </div>
</form>

</body>
</html>
