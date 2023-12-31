<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombeiros Voluntarios</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../scripts/admin.js"></script>
</head>

<body>

    <section id="inicio">
        <img src="../LOGO-BVG 1.png" alt="logo">
        <div id="titulo">
            <h1>BOMBEIROS VOLUNTÁRIOS</h1>
            <h2>ADMINISTRADOR</h2>
        </div>
    </section>
    <div class="opcoes">
        <input type="button" value="Gerenciar Equipes" class="botaoAcao" id="botaoGerenciarEquipes"></input>
        <!-- procurar no bootstrap -->
        <div class="invisivel" style="display: none;">
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include('../database/conexao.php'); // Inclua o arquivo de conexão
        mysqli_set_charset($conexao, "utf8");

        // Consulta SQL para obter os dados da ocorrência com id=1
        $sql = "SELECT * FROM equipe_atendimento";
        $result = mysqli_query($conexao, $sql);

        if ($result) {
            // Iterar sobre os resultados da consulta
            while ($row = mysqli_fetch_assoc($result)) {
        ?> 
            <div class="opcoesEquipes">
                <div class="equipe">
                    <img id="iconeBombeiro" src="../img/equipeBomb.png" alt="">
                    <form method="post" action="../database/atualizarEquipe.php">
           <div id="nomeSalvar">
            
            <input type="text" name="novo_nome" value="<?php echo $row['equipe'] ?>" />
            <input type="hidden" name="equipe_id" value="<?php echo $row['id_equipe_atendimento']; ?>" />
           
        
            <input type="password" name="nova_senha" class="password" value="<?php echo $row['senha'] ?>" />
            <button class="mostrarSenha" type="button"> 
                    <img class="icon" src="../img/olho.png" alt="Mostrar Senha">
                </button>
            <button type="submit">Salvar</button>
        </div>
        </form>
                </div>
                <div>
                    <img src="../img/lixeira.svg" alt=""class="lixeira" data-equipe-id="<?php echo $row['id_equipe_atendimento']; ?>">
                </div>
            </div>
<?php
        }
    } else {
        echo "Erro ao recuperar os dados da ocorrência.";
    }

//Feche a conexão com o banco de dados
    mysqli_close($conexao);
    ?> 
    <div class="opcoesEquipe">
        <div class="equipe">
        <a href="doCadastro.php" id="cadastrar"> 
       
            <img src="../img/adicionar.svg" alt="">
            <p id="adicionarEquipe">Adicionar</p>
            </img src="../img/equipeBomb.png" alt="">
            
        </a>    
        </div>
    </div>
        </div>
        <div class="botaoAcao"><a href="../pages/historico.php" ><input type="button" value="Histórico de ocorrências" class="botaoAcao historico"></a></div>
        
    </div>
    <a href="../index.html" id="voltar"><input type="button" value="Voltar"></a>
 
<script>
document.addEventListener("DOMContentLoaded", function () {
    var mostrarSenha = document.querySelectorAll(".mostrarSenha");
    mostrarSenha.forEach(function (mostrarSenha) {
        mostrarSenha.addEventListener("click", function () {
            console.log('Evento acionado');
            var password = mostrarSenha.parentElement.querySelector(".password");
            console.log('Before change:', password.type);
            var icon = mostrarSenha.querySelector(".icon");
            var senhaVisivel = password.type === "text";

            if (senhaVisivel) {
                console.log('transformar invisivel')
                password.type = "password";
                icon.src = "../img/olho.png";
                icon.alt = "Mostrar Senha";
            } else {
                console.log('transformar visivel')
                password.type = "text";
                icon.src = "../img/visivel.png";
                icon.alt = "Ocultar Senha";
            }

            
            console.log('After change:', password.type);
        });
    });
});
</script>
</body>

</html>