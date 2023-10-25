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
        <input type="button" value="Gerenciar Equipes" class="botaoAcao">
        <!-- procurar no bootstrap -->
        <div class="invisivel">
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
                    <img src="../img/equipeBomb.png" alt="">
                    <p class="nomeEquipe"><?php echo $row['equipe']?></p>
                    <!-- Campo de entrada oculto inicialmente -->
                    <input type="text" class="campoEdicao" style="display: none;"       value="<?php echo $row['equipe']?>" />
        <!-- Botão de confirmação oculto inicialmente -->
        <button class="botaoConfirmar" style="display: none;">Confirmar</button>
                </div>
                <div>
                    <img src="../img/editar.svg" alt="" class="lapis">
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

        </div>
        <a href="../pages/historico.php" ><input type="button" value="Histórico de ocorrências" class="botaoAcao historico"></a>
        
    </div>
    <a href="../index.html" id="voltar"><input type="button" value="Voltar"></a>
</body>

</html>