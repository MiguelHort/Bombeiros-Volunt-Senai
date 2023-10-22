<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico</title>
    <link rel="stylesheet" href="/css/historico.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
     <div class="accordion" id="accordionPanelsStayOpenExample">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include('../database/conexao.php'); // Inclua o arquivo de conexão

        // Consulta SQL para obter os dados da ocorrência com id=1
        $sql = "SELECT * FROM ocorrencia INNER JOIN paciente on ocorrencia.fk_paciente = paciente.id_paciente";
        $result = mysqli_query($conexao, $sql);

        if ($result) {
            // Iterar sobre os resultados da consulta
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse-<?php echo $row['id_ocorrencia']; ?>"
                            aria-expanded="true"
                            aria-controls="panelsStayOpen-collapse-<?php echo $row['id_ocorrencia']; ?>">
                            <p class="titulomenususpenso"><?php echo $row['data_e_hora']; ?> Nº<?php echo $row['id_ocorrencia']; ?><BR></BR><?php echo $row['nome']; ?><br><?php echo $row['idade']; ?> ANOS</p>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse-<?php echo $row['id_ocorrencia']; ?>"
                        class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <!-- Coloque aqui as informações específicas da ocorrência usando $row['nome_do_campo'] -->
                            <h2>Informações (vítima e ocorrência)</h2>
                    <div><strong>Nome da vítima:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>CPF:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>SEXO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>NOME DO ACOMPANHANTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>RELAÇÃO COM ACOMPANHANTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>O QUE ACONTECEU:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>ACONTECEU OUTRAS VEZES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>A QUANTO TEMPO ACONTECEU:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>POSSUI ALGUM PROBLEMA DE SAÚDE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>QUAIS PROBLEMAS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>FAZ USO DE MEDICAÇÃO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>QUAIS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>ALÉRGICO A ALGO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>ALÉRGICO A:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>GESTANTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PRÉ-NATAL:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PERÍODO DA GESTAÇÃO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>NOME DO MÉDICO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>POSSÍVEIS COMPLICAÇÕES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PRIMERO FILHO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>QUANTOS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>CONTRAÇÕES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>QUE HORAS INICIARAM AS CONTRAÇÕES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>INTERVALO ENTRE CONTRAÇÕES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DURAÇÃO DAS CONTRAÇÕES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PRESSÃO NO QUADRIL OU VONTADE DE EVACUAR:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>JÁ HOUVE RUPTURA NA BOLSA?:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>FOI FEITA INSPEÇÃO VISUAL?::</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PARTO REALIZADO?::</strong>
                        <p>?</p>
                    </div>
                    <div><strong>SEXO DO BEBÊ:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>TIPO DE OCORRÊNCIA:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>AVALIAÇÃO GLASGOW:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>GESTANTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>GESTANTE:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>PRESSÃO ARTERIAL:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PULSO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>RESPIRAÇÃO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>SATURAÇÃO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>HGT:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>TEMPERATURA:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>PROBLEMAS PSIQUIÁTRICOS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PROBLEMAS RESPIRATÓRIOS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DIABETES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>OUTROS:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>LOCALIZAÇÃO E TIPO DE TRAUMA:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>SINAIS E SINTOMAS:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>FORMA DE CONDUÇÃO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>VÍTIMA ERA:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DECISÃO TRANSPORTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PROCEDIMENTOS EFETUADOS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>MATERIAIS UTILIZADOS DESCARTÁVEIS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>MATERIAIS UTILIZADOS DEIXADOS NO HOSPITAL:</strong>
                        <p>?</p>
                    </div>


                    <div><strong>ENCONTRADO DE CAPACETE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DISTÚRBIO DE COMPORTAMENTO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>ENCONTRADO DE CINTO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PARA-BRISAS AVARIADO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>CAMINHANDO NA CENA:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>PAINEL AVARIADO:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>VOLANTE TORCIDO:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>OBJETOS RECOLHIDOS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>OBSERVAÇÕES IMPORTANTES:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>M:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>S1:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>S2:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>S3:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DEMANDANTE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>EQUIPE:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>Nº USB:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>Nº OCORRÊNCIA:</strong>
                        <p>?</p>
                    </div>

                    <div><strong>CÓD. IR:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>CÓD. PS:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>DESP:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>KM FINAL:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>H. CH:</strong>
                        <p>?</p>
                    </div>
                    <div><strong>SIA/SUS:</strong>
                        <p>?</p>
                    </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "Erro ao recuperar os dados da ocorrência.";
        }

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>