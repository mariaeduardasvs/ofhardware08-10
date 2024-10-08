<?php
    echo $this->layout("_theme");
?>
<?php
  $this->start("specific-script");
?>
<script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>
<?php
$this->end();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina de Hardware - Login</title>
  <!--  <link rel="stylesheet" href="style.css">
     Link para o Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Oficina de Hardware</h1>
    </header>
    
    <!-- Formulário de login -->
    <div class="login-container">

        <form id="formLogin" class="formLogin">
            <label>
                <span>Email:</span>
                <input type="email" name="email" value="fabiosantos@ifsul.edu.br" required>
            </label>
            <label>
                <span>Senha:</span>
                <input type="password" name="password" value="12345678" required>
            </label>
            <button type="submit">Entrar</button>
            <a href="<?= url("register");?>">Cadastrar-se</a>
        </form>
    </div>
</body>
</html>