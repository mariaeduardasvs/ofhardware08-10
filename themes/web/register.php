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


<!-- Formulário de Cadastro de Usuário -->

<!-- Contêiner para as mensagens toast -->
<body>
<header>
        <h1>Oficina de Hardware</h1>
    </header>

    <!-- Container do Formulário de Registro -->
    <div class="register-container">
        <form id="formRegister" class="formLogin">
            <label>
                <span>Nome:</span>
                <input type="text" name="name" value="Fábio Santos" required>
            </label>
            <label>
                <span>Email:</span>
                <input type="email" name="email" value="fabiosantos@ifsul.edu.br" required>
            </label>
            <label>
                <span>Senha:</span>
                <input type="password" name="password" value="1234567" required>
            </label>
            <label>
                <span>Turma:</span>
                <select id="class" name="class" required>
                <option value="" disabled selected>Selecione uma turma</option>

                <option value="tecinf">Curso Técnico de Nível médio em Informática</option>
                <option value="tecmct">Curso Técnico de Nível médio em Mecatrônica</option>
                
            </select>
            </label>
            <button type="submit">Cadastrar</button>
            <a href="<?= url("login");?>">Sign In</a>
        </form>
    </div>
</body>
</html>
