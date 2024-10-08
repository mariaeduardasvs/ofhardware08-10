<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina de Hardware - Apresentação</title>
  <!--  <link rel="stylesheet" href="style.css">
     Link para o Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Oficina de Hardware</h1>
    </header>

    <div class="main-container">
        <!-- Container do Texto -->
        <div class="text-container">
            <h2>Sobre as Oficinas</h2>
            <p>
                Bem-vindo à Oficina de Hardware! Nossas oficinas são voltadas para todos que desejam aprimorar suas habilidades em manutenção de computadores e outros dispositivos eletrônicos. 
                Seja você um iniciante ou um entusiasta avançado, temos algo para todos. 
                Nas oficinas, você aprenderá a diagnosticar problemas de hardware, realizar reparos e montar computadores do zero.
            </p>
            <p>
                Oferecemos um ambiente prático e colaborativo, onde você pode trabalhar em projetos reais, obter orientação especializada e conectar-se com outros apaixonados por tecnologia.
                Nossos instrutores são profissionais experientes, prontos para ajudar você a alcançar seus objetivos técnicos.
            </p>
            <p>
                As oficinas estão disponíveis em vários horários para atender à sua agenda. Não perca essa oportunidade de aprender e crescer na área de hardware!
            </p>

            
            <button onclick="window.location.href='<?= url("register"); ?>'">Cadastre-se Agora</button>


        </div>

        <!-- Container da Imagem -->
        <div class="image-container">
            <img src=" <?=url("/assests/web/images/hardware.png")?>" alt="Oficina de Hardware" />
        </div>
    </div>
</body>
</html>
