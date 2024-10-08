<?php
    echo $this->layout("_theme");
?>
<?php
    $this->start("specific-script");
?>
<script src="<?= url("assets/js/web/faqs.js"); ?>"></script>
<?php
    $this->end();
?>
<body>
    <header>
        <h1>Oficina de Hardware</h1>
    </header>


<div class="faq-container">
  
    <?php foreach ($questions as $question): ?>
        <div class="faq">
            <h1 class="faq-question"><?= $question->question; ?></h1>
            <p class="faq-answer"><?= $question->answer; ?></p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
<style>
/* Estilo do contêiner FAQ */
.faq-container {
    max-width: 800px; /* Largura máxima do contêiner */
    margin: 0 auto; /* Centraliza horizontalmente */
    padding: 2rem; /* Adiciona padding ao redor do contêiner */
}

/* Estilos gerais para o contêiner FAQ */
.faq {
    background-color: #ffffff; /* Fundo branco para as FAQs */
    border: 1px solid #D8BFD8; /* Borda sutil */
    border-radius: 8px; /* Arredondamento das bordas */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombreamento leve */
    margin: 1rem 0; /* Espaçamento entre as FAQs */
    padding: 1.5rem; /* Espaçamento interno */
    transition: all 0.3s ease; /* Transição suave para efeitos */
}

/* Estilo da pergunta */
.faq-question {
    font-size: 1.6rem; /* Tamanho da fonte maior */
    color: #4B0082; /* Roxo escuro */
    cursor: pointer; /* Mudança de cursor para indicar interatividade */
    margin: 0; /* Remover margens */
}

/* Estilo da resposta */
.faq-answer {
    font-size: 1.2rem; /* Tamanho da fonte para a resposta */
    color: #333; /* Cor cinza escuro */
    margin-top: 0.5rem; /* Espaçamento acima da resposta */
    display: none; /* Inicialmente escondido */
}

/* Estilo para hover na pergunta */
.faq-question:hover {
    color: #D8BFD8; /* Mudança de cor ao passar o mouse */
}

/* Estilo para mostrar a resposta ao expandir */
.faq.active .faq-answer {
    display: block; /* Exibir resposta quando ativo */
}
</style>

<script>
// Selecionar todas as perguntas
const questions = document.querySelectorAll('.faq-question');

// Adicionar um evento de clique a cada pergunta
questions.forEach(question => {
    question.addEventListener('click', () => {
        const faq = question.parentElement; // Pega o contêiner da FAQ
        faq.classList.toggle('active'); // Alterna a classe 'active'
    });
});
</script>
