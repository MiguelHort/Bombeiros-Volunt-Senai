<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../database/conexao.php');
$conexao->set_charset("utf8mb4");
// Recebe os dados do formulário
$data = $_POST['dia'] . '/' . $_POST['mes'] . '/' . $_POST['ano']; // Data
$nomePaciente = $_POST['nomePaciente']; // Nome do paciente
$cpfPaciente = $_POST['inputcpf']; //CPF do paciente
$sexoPaciente = $_POST['sexoPaciente']; // Sexo do paciente
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

$problemas = isset($_POST['problema']) ? implode(", ", $_POST['problema']) : '';
$sinaisSintomas = isset($_POST['sinaisSintomas']) ? implode(", ", $_POST['sinaisSintomas']) : '';
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
$desp = $_POST['kmfinal'];
$h_ch = $_POST['h.ch'];
$sia_sus = $_POST['sia_sus'];
$km_final = $_POST['kmfinal'];

$date = $_POST['date'];
$time = $_POST['time'];
$tipoOcorrencia = $_POST['tipoOcorrencia'];
$observacoes = $_POST['observacoes'];


$sql1 = "INSERT INTO paciente (nome, rg_cpf, sexo) VALUES ('$nomePaciente', '$cpfPaciente', '$sexoPaciente');";
$sql2 = "INSERT INTO acompanhante (nome_acompa, relacao) VALUES ('$nomeAcompanhante', '$relacaoAcompanhante');";
$sql3 ="INSERT INTO anamnese_emerg (sinais_sintomas, outras_vezes, quando_aconteceu, problema_de_saude, quais_problemas, usa_medicacao, horario_medicacao, quais_medicacoes, alergico, qual_alergia, ingeriu_alimento, hora_ingeriu) VALUES ('$anamnese', '$anamVezes', '$horaAconteceu', '$problemaSaude', '$quaisProblemas', '$usaMedicacao', '$horarioMedicacao', '$quaisMedicacoes', '$alergico', '$qualAlergia', '$ingeriuAlgo', '$horaIngeriu');";
$sql4 ="INSERT INTO anamnese_gest (pre_natal, periodo_gest, nome_medico, complicacao, primeiro_filho, quantos, contracoes, horario_contracoes, intervalo_contracoes, duracao_contracoes, pressao_ou_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, sexo_bebe) VALUES ('$preNatal', '$periodoGest', '$nomeMedico', '$complicacao', '$primeiroFilho', '$quantosFilhos', '$contracao', '$horaContracao', '$intervalo', '$duracao', '$pressao', '$ruptura', '$inspecao', '$parto', '$sexoBebe');";
$sql5 ="INSERT INTO avaliacao (total_gcs) VALUES ('$totalGsc');";
$sql6 ="INSERT INTO sinais_vitais (mmHg, bcpm, respiracao, saturacao, hgt, temperatura) VALUES ('$mmHg', '$bcpm', '$mrm', '$saturacao', '$hgt', '$temperatura');";
$sql7 ="INSERT INTO problem_suspeito (tipo_problem) VALUES ('$problemas')";
$sql8 ="INSERT INTO sinais_sintomas (sintomas) VALUES ('$sinaisSintomas')";
$sql9 ="INSERT INTO proced_efetuados (procedimentos) VALUES ('$procedimento')";
$sql10 ="INSERT INTO cinematica (avaliacao_cinematica) VALUES ('$cinematica')";
$sql11 ="INSERT INTO info_finais (usb, ir, ps, desp, h_ch, sia_sus, km_final) VALUES ('$usb', '$ir', '$ps', '$desp', '$h_ch', '$sia_sus', '$km_final');";

//selects
$Qid_paciente = "SELECT id_paciente FROM paciente WHERE nome = '$nomePaciente' AND rg_cpf = '$cpfPaciente';";
$Qid_info_finais = "SELECT id_info_finais from info_finais WHERE usb = '$usb' AND km_final = '$km_final';";

$selects = array($Qid_paciente, $Qid_info_finais);
$queries = array($sql1, $sql2, $sql3, $sql4, $sql5,$sql6, $sql7, $sql8, $sql9, $sql10, $sql11);


$ligacoes = array()

foreach ($queries as $query) {
    if ($conexao->query($query) === TRUE) {       
        // A consulta foi bem-sucedida
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        break; // Isso interrompe o loop se houver um erro em uma das consultas.
    }
}
foreach ($selects as $select){
     $result = $conexao->query($select);
     if ($result !== FALSE) {
        $row = $result->fetch_assoc();
        $id_paciente = $row['id_paciente'];
        $id_info_finais = $row['id_info_finais'];
        echo "ID do Paciente: " . $id_paciente;
        echo "ID info_finais: " . $id_info_finais;
    } else {
        echo "Erro ao consultar dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        break; // Isso interrompe o loop se houver um erro em uma das consultas.
    }
}
foreach ($queries as $query) {
    if ($conexao->query($query) === TRUE) {       
        // A consulta foi bem-sucedida
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
        // Se ocorrer um erro, você pode decidir como lidar com ele, interromper o loop ou registrar o erro.
        break; // Isso interrompe o loop se houver um erro em uma das consultas.
    }
}

echo "Dados inseridos com sucesso!";
$conexao->close();
?>