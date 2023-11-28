<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('../database/conexao.php');
$conexao->set_charset("utf8mb4");

$dataOcorrencia = $_POST['dataOcorrencia'];
$horaOcorrencia = $_POST['horaOcorrencia'];
$datetime = $dataOcorrencia . " " . $horaOcorrencia;
// if(isset($_POST['dataOcorrencia'], $_POST['horaOcorrencia'])) {
//     $datetimeFormatted = $_POST['dataOcorrencia'] . ' ' . $_POST['horaOcorrencia'];
    
// } else {
//     // Lida com a falta de data ou hora
//     echo "datetime:".$datetimeFormatted . "data:".$_POST['dataOcorrencia']. "hora:".$_POST['horaOcorrencia'] . "$dataOcorrencia:".$dataOcorrencia . "$horaOcorrencia:" . $horaOcorrencia . "$datetime:". $datetime;
//     echo "Erro: Data e/ou hora não foram fornecidas.";
// }


$nomePaciente = $_POST['nomePaciente']; // Nome do paciente
$cpfPaciente = $_POST['cpf']; //CPF do paciente
$sexoPaciente = $_POST['sexoPaciente']; // Sexo do paciente
$idadePaciente = $_POST['idade'];
$fone = $_POST['fone'];
$formaConducao = $_POST['formaConducao'];
$vitimaEra = isset($_POST['vitimaEra']) ? implode(", ", $_POST['vitimaEra']) : '';
$estadoTransporte = $_POST['estadoTransporte'];
$objetosRecolhidos = $_POST['objetosRecolhidos'];
$nomeAcompanhante = $_POST['nomeAcompanhante'];
// $idadeAcompanhante = $_POST['']
$relacaoAcompanhante = isset($_POST['relacaoEscolhida']) ? $_POST['relacaoEscolhida'] : '';
$anamnese = $_POST['anamnese']; 
$anamVezes = $_POST['anamVezes'];
$horaAconteceu = $_POST['horaAconteceu'];
$problemaSaude = $_POST['problemaSaude'];
$quaisProblemas = $_POST['quaisProblemas'];
$usaMedicacao = $_POST['usaMedicacao'];
$horarioMedicacao = $_POST['horaMedicacao'];
$quaisMedicacoes = $_POST['quaisMedicacoes'];
$alergico = $_POST['alergico'];
$qualAlergia = $_POST['qualAlergia'];
$ingeriuAlgo = $_POST['ingeriuAlgo'];
$horaIngeriu = $_POST['horaIngeriu'];

$preNatal = $_POST['preNatal'];
$periodoGest = $_POST['periodoGestacao'];
$nomeMedico = $_POST['nomeMedico'];
$complicacao = $_POST['complicacao'];
$primeiroFilho = $_POST['primeiroFilho'];
$quantosFilhos = $_POST['quantosFilhos'];
$contracao = $_POST['contracao'];
$horaContracao = $_POST['horaContracao'];
$intervalo = $_POST['intervalo'];
$duracao = $_POST['duracaoContracao'];
$pressao = $_POST['pressao'];
$ruptura = $_POST['ruptura'];
$inspecao = $_POST['inspecao'];
$parto = $_POST['parto'];
$sexoBebe = $_POST['sexoBebe'];

$totalGsc = $_POST['totalGlasgow'];
$pressaoArterial = $_POST['pressaoArterial'];
$pressaoArterial2 = $_POST['pressaoArterial2'];
$mmHg = $pressaoArterial . "x" . $pressaoArterial2;
$bcpm = $_POST['pulso'];
$mrm = $_POST['respiracao'];
$saturacao = $_POST['saturacao'];
$hgt = $_POST['hgt'];
$temperatura = $_POST['temperatura'];

$problemas = isset($_POST['problemas']) ? implode(", ", $_POST['problemas']) : '';
$sinaisSintomas = isset($_POST['sinais_Sintomas']) ? implode(", ", $_POST['sinais_Sintomas']) : '';
$procedimento = isset($_POST['procedimento']) ? implode(", ", $_POST['procedimento']) : '';
$procedimento = isset($_POST['procedimento']) ? implode(", ", $_POST['procedimento']) : '';

$procedimento_outros = isset($_POST['procedimento_outros']) ? $_POST['procedimento_outros'] : '';

// // Verifica se "Outros" foi marcado
// if (in_array('Outros', $_POST['procedimento']) && !empty($procedimento_outros)) {
//     $procedimento[] = $procedimento_outros;
// }

// $procedimento_implode = !empty($procedimento) ? implode(", ", $procedimento) : '';

$cinematica = isset($_POST['cinematica']) ? implode(", ", $_POST['cinematica']) : '';

$usb = $_POST['usb'];
$ir = $_POST['ir'];
$ocorr = $_POST['ocorr'];
$ps = $_POST['ps'];
$desp = $_POST['desp'];
$h_ch = $_POST['h_ch'];
$sia_sus = $_POST['sia_sus'];
$km_final = $_POST['kmfinal'];


$tipoOcorrencia = $_POST['tipoOcorrencia'];
$observacoes = $_POST['observacoes'];
$m = $_POST['m'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$demandante = $_POST['demandante'];

$localizacao_aprox = $_POST['parte'];
$tipo_trauma = $_POST['tipo'];
$adulto_crianca = $_POST['adulto_crianca'];

$sql1 = "INSERT INTO paciente (nome, rg_cpf, sexo, idade, fone, forma_conducao, vitima_era, decisao_transp, objetos_recolhidos) VALUES ('$nomePaciente', '$cpfPaciente', '$sexoPaciente', '$idadePaciente', '$fone', '$formaConducao', '$vitimaEra', '$estadoTransporte', '$objetosRecolhidos');";
$sql2 = "INSERT INTO acompanhante (nome_acompa, relacao) VALUES ('$nomeAcompanhante', '$relacaoAcompanhante');";
$sql3 ="INSERT INTO anamnese_emerg (oque_aconteceu, outras_vezes, quando_aconteceu, problema_de_saude, quais_problemas, usa_medicacao, horario_medicacao, quais_medicacoes, alergico, qual_alergia, ingeriu_alimento, hora_ingeriu) VALUES ('$anamnese', '$anamVezes', '$horaAconteceu', '$problemaSaude', '$quaisProblemas', '$usaMedicacao', '$horarioMedicacao', '$quaisMedicacoes', '$alergico', '$qualAlergia', '$ingeriuAlgo', '$horaIngeriu');";
$sql4 ="INSERT INTO anamnese_gest (pre_natal, periodo_gest, nome_medico, complicacao, primeiro_filho, quantos, contracoes, horario_contracoes, intervalo_contracoes, duracao_contracoes, pressao_ou_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, sexo_bebe) VALUES ('$preNatal', '$periodoGest', '$nomeMedico', '$complicacao', '$primeiroFilho', '$quantosFilhos', '$contracao', '$horaContracao', '$intervalo', '$duracao', '$pressao', '$ruptura', '$inspecao', '$parto', '$sexoBebe');";
$sql5 ="INSERT INTO avaliacao (total_gcs) VALUES ('$totalGsc');";
$sql6 ="INSERT INTO sinais_vitais (mmHg, bcpm, respiracao, saturacao, hgt, temperatura) VALUES ('$mmHg', '$bcpm', '$mrm', '$saturacao', '$hgt', '$temperatura');";
$sql7 ="INSERT INTO problem_suspeito (tipo_problem) VALUES ('$problemas')";
$sql8 ="INSERT INTO sinais_sintomas (sintomas) VALUES ('$sinaisSintomas')";
$sql9 ="INSERT INTO proced_efetuados (procedimentos) VALUES ('$procedimento')";
$sql10 ="INSERT INTO cinematica (avaliacao_cinematica) VALUES ('$cinematica')";
$sql11 ="INSERT INTO info_finais (usb, ir, ps, desp, h_ch, sia_sus, km_final, n_ocorr) VALUES ('$usb', '$ir', '$ps', '$desp', '$h_ch', '$sia_sus', '$km_final', '$ocorr');";
$sql14 = "INSERT INTO localizacao_trauma (tipo_trauma, localizacao_aprox) VALUES ('$tipo_trauma', '$localizacao_aprox');";

$queries = array($sql1, $sql2, $sql3, $sql4, $sql5,$sql6, $sql7, $sql8, $sql9, $sql10, $sql11, $sql14);

//selects
$Qid_paciente = "SELECT id_paciente FROM paciente WHERE nome = '$nomePaciente' AND rg_cpf = '$cpfPaciente';";
$Qid_info_finais = "SELECT id_info_finais FROM info_finais WHERE km_final = '$km_final';";
$Qid_anamnese_emerg = "SELECT id_anamnese_emerg FROM anamnese_emerg WHERE oque_aconteceu = '$anamnese' AND quando_aconteceu = '$horaAconteceu';";
$Qid_anamnese_gest = "SELECT id_anamnese_gest FROM anamnese_gest WHERE periodo_gest = '$periodoGest' AND nome_medico = '$nomeMedico' AND quantos = '$quantosFilhos';";
$Qid_avaliacao = "SELECT id_avaliacao FROM avaliacao WHERE total_gcs = '$totalGsc';";
$Qid_sinais_vitais = "SELECT id_sinais_vitais FROM sinais_vitais WHERE mmHg = '$mmHg' AND bcpm = '$bcpm' AND respiracao = '$mrm' AND saturacao = '$saturacao' AND hgt = '$hgt' AND temperatura = '$temperatura';";
$Qid_problem_suspeito = "SELECT id_problem_suspeito FROM problem_suspeito WHERE tipo_problem = '$problemas';";
$Qid_sinais_sintomas = "SELECT id_sinais_sintomas FROM sinais_sintomas WHERE sintomas = '$sinaisSintomas';";
$Qid_proced_efetuados = "SELECT id_proced_efetuados FROM proced_efetuados WHERE procedimentos = '$procedimento';";
$Qid_cinematica = "SELECT id_cinematica FROM cinematica WHERE avaliacao_cinematica = '$cinematica';";
$Qid_acompanhante = "SELECT id_acompa FROM acompanhante WHERE nome_acompa = '$nomeAcompanhante' AND relacao = '$relacaoAcompanhante';";
$Qid_localizacao_trauma = "SELECT id_localizacao_trauma FROM localizacao_trauma WHERE tipo_trauma = '$tipo_trauma' AND localizacao_aprox = '$localizacao_aprox';";


$selects = array($Qid_paciente, $Qid_info_finais, $Qid_anamnese_emerg, $Qid_anamnese_gest, $Qid_avaliacao, $Qid_sinais_vitais, $Qid_problem_suspeito, $Qid_sinais_sintomas, $Qid_proced_efetuados, $Qid_cinematica, $Qid_acompanhante, $Qid_localizacao_trauma);

foreach ($queries as $query) {
    if ($conexao->query($query) === TRUE) {      
        // echo "usb=".$usb." km_final =".$km_final." n_ocorr= ".$ocorr;
        // echo $datetime;
        // echo $dataOcorrencia . $horaOcorrencia;
        //  echo $localizacao_aprox . $tipo_trauma;
        // echo $pressaoArterial . $pressaoArterial2 .$mmHg . $bcpm . $mrm . $saturacao . $hgt . $temperatura;
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        break; // Isso interrompe o loop se houver um erro em uma das consultas.
    }
}

foreach ($selects as $select) {
    $result = $conexao->query($select);

    if ($result !== FALSE && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (isset($row['id_paciente'])) {
            $id_paciente = $row['id_paciente'];
            // echo "ID do Paciente: " . $id_paciente;
        }

        if (isset($row['id_info_finais'])) {
            $id_info_finais = $row['id_info_finais'];
            // echo "ID info_finais: " . $id_info_finais;
        }

         if (isset($row['id_anamnese_emerg'])) {
            $id_anamnese_emerg = $row['id_anamnese_emerg'];
            // echo "ID id_anamnese_emerg: " . $id_anamnese_emerg;
        }

        if (isset($row['id_anamnese_gest'])) {
            $id_anamnese_gest = $row['id_anamnese_gest'];
            // echo "ID id_anamnese_gest: " . $id_anamnese_gest;
        }

        if (isset($row['id_avaliacao'])) {
            $id_avaliacao = $row['id_avaliacao'];
            // echo "ID id_avaliacao: " . $id_avaliacao;
        }

         if (isset($row['id_sinais_vitais'])) {
            $id_sinais_vitais = $row['id_sinais_vitais'];
            echo "ID id_sinais_vitais: " . $id_sinais_vitais;
        }

         if (isset($row['id_problem_suspeito'])) {
            $id_problem_suspeito = $row['id_problem_suspeito'];
            // echo "ID id_problem_suspeito: " . $id_problem_suspeito;
        }

        if (isset($row['id_sinais_sintomas'])) {
            $id_sinais_sintomas = $row['id_sinais_sintomas'];
            // echo "ID id_sinais_sintomas: " . $id_sinais_sintomas;
        }

        if (isset($row['id_proced_efetuados'])) {
            $id_proced_efetuados = $row['id_proced_efetuados'];
            // echo "ID id_proced_efetuados: " . $id_proced_efetuados;
        }

        if (isset($row['id_cinematica'])) {
            $id_cinematica = $row['id_cinematica'];
            // echo "ID id_cinematica: " . $id_cinematica;
        }

        if (isset($row['id_acompa'])) {
            $id_acompanhante = $row['id_acompa'];
            // echo "ID id_acompanhante: " . $id_acompanhante;
        }

        if (isset($row['id_localizacao_trauma'])) {
            $id_localizacao_trauma = $row['id_localizacao_trauma'];
            // echo "ID id_acompanhante: " . $id_acompanhante;
        }

    } else {
        echo "Erro ao consultar dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        // Isso interrompe o loop se houver um erro em uma das consultas.
    }
}
 //ligacoes chaves estrangeiras
 $usuario_id = $_SESSION['usuario_id'];

$verificaEquipe = "SELECT id_equipe_atendimento FROM equipe_atendimento WHERE id_equipe_atendimento = '$usuario_id';";
$resultadoVerificacao = $conexao->query($verificaEquipe);

if ($resultadoVerificacao === FALSE || $resultadoVerificacao->num_rows === 0) {
    // O valor de $_SESSION['usuario_id'] não existe na tabela equipe_atendimento
    echo "Erro: O usuário não existe na tabela equipe_atendimento.";
} else {
    // Continue com a execução da consulta $sql12
    $sql12 = "INSERT INTO ocorrencia (data_e_hora, fk_paciente, tipo_ocorrencia, obs_importantes, fk_equipe_atendimento, fk_info_finais, m, s1, s2, demandante, s3) VALUES ('$datetime', '$id_paciente', '$tipoOcorrencia', '$observacoes', '$usuario_id', '$id_info_finais', '$m', '$s1', '$s2', '$demandante', '$s3');";
    $sql13 =  "UPDATE paciente SET fk_anamnese_emerg = '$id_anamnese_emerg', fk_anamnese_gest = '$id_anamnese_gest', fk_avaliacao = '$id_avaliacao',  fk_sinais_vitais = '$id_sinais_vitais', fk_problem_suspeito = '$id_problem_suspeito', fk_sinais_sintomas = '$id_sinais_sintomas', fk_proced_efetuados = '$id_proced_efetuados', fk_cinematica = '$id_cinematica', fk_acompanhante = '$id_acompanhante', fk_localizacao_trauma = '$id_localizacao_trauma';";
$ligacoes = array($sql12, $sql13);
foreach ($ligacoes as $ligacao) {
    if ($conexao->query($ligacao) === TRUE) {  
        $id_ocorrencia = $conexao->insert_id;
        // echo "id_ocorrencia=".$id_ocorrencia;

$materiaisDescartaveis = array(
            "ataduras" => array("Ataduras", $_POST['tamAtaduras'], $_POST['qtdAtaduras']),
            "cateter" => array("Cateter Tp. Óculos", "", $_POST['qtdCateter']),
            "compressa" => array("Compressa comum", "", $_POST['qtdCompressa']),
            "kits" => array("Kits", $_POST['tamKits'], $_POST['qtdKits']),
            "luvas" => array("Luvas desc. (pares)", "", $_POST['qtdLuvas']),
            "mascara" => array("Máscara desc.", "", $_POST['qtdMascara']),
            "manta" => array("Manta aluminizada", "", $_POST['qtdManta']),
            "pas" => array("Pás do DEA", "", $_POST['qtdPas']),
            "sonda" => array("Sonda de aspiração", "", $_POST['qtdSonda']),
            "soro" => array("Soro fisiológico", "", $_POST['qtdSoro']),
            "talas" => array("Talas pap.", $_POST['tamTalas'], $_POST['qtdTalas'])
        );

        // Itera pelos materiais descartáveis e insere na tabela "materiais_descartaveis"
        foreach ($materiaisDescartaveis as $key => $material) {
            $materialNome = $material[0];
            $materialTamanho = $material[1];
            $materialQuantidade = $material[2];
             echo "nome do material:".$materialNome . "tamanho do material:". $materialTamanho . "quantidade:". $materialQuantidade . $id_ocorrencia;   
            // Verifica se a caixa de seleção está marcada
            if (isset($_POST[$key])) {
                $insereMaterialDescartavel = "INSERT INTO materiais_descart (material, tamanho, quantidade, fk_ocorrencia) VALUES ('$materialNome', '$materialTamanho', '$materialQuantidade', '$id_ocorrencia');";  
                if ($conexao->query($insereMaterialDescartavel) === TRUE) {
 
                    // Inserção de material bem-sucedida
                } else {
                    echo "Erro ao inserir dados do material descartável: " . $conexao->error;
                    break; // Interrompe o loop se ocorrer um erro
                }
            }
        }

        $materials = array(
    "baseEstabilizador" => array("Base do estabilizador", "", $_POST['qtdBase']),
    "colar" => array("Colar", $_POST['tamColar'], $_POST['qtdColar']),
    "coxinsestabiliza" => array("Coxins estabiliza.", "", $_POST['qtdCoxins']),
    "ked" => array("KED", $_POST['tamKed'], $_POST['qtdKed']),
    "macaRigida" => array("Maca rígida", "", $_POST['qtdMaca']),
    "tiranteAranha" => array("Tirante aranha", "", $_POST['qtdAranha']),
    "tiranteCabeca" => array("Tirante de cabeça", "", $_POST['qtdCabeca']),
    "canula" => array("Cânula", "", $_POST['qtdCanula'])
);

// Iterate through materials and insert into the "deixados_hospital" table
foreach ($materials as $key => $material) {
    $materialName = $material[0];
    $materialSize = $material[1];
    $materialQuantity = $material[2];

    // Check if the checkbox is selected
    if (isset($_POST[$key])) {
        $insertMaterialQuery = "INSERT INTO deixados_hospital (material, deixado_tamanho, deixado_quantidade, fk_ocorrencia) VALUES ('$materialName', '$materialSize', '$materialQuantity', '$id_ocorrencia')";

        if ($conexao->query($insertMaterialQuery) === TRUE) {
            // Material insertion successful
        } else {
            //echo "Erro ao inserir dados do material: " . $conexao->error;
            break; // Stop the loop if an error occurs
        }
    }
}

        // A inserção foi bem-sucedida2
    } else {
        // echo "Erro ao inserir dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        break; // Isso interrompe o loop se houver um erro em uma das consultas.
    }

    
}
// echo "Dados inseridos com sucesso!";
//  echo $localizacao_aprox . $tipo_trauma;
// echo "ID do Paciente: " . $id_paciente;
// echo "ID id_acompanhante: " . $id_acompanhante;
//  echo "ID id_sinais_sintomas: " . $id_sinais_sintomas;
//  echo "id_ocorrencia:".$id_ocorrencia;
    // ... o resto do código
    $conexao->close();
    header('Location:../pages/concluido.html');
}

?>