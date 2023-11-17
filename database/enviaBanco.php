<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../database/conexao.php');
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




// Insere os dados na tabela 'paciente'
$sql = "INSERT INTO paciente (nome, rg_cpf, sexo) VALUES ('$nomePaciente', '$cpfPaciente', '$sexoPaciente');";
$sql .= "INSERT INTO acompanhante (nome_acompa, relacao) VALUES ('$nomeAcompanhante', '$relacaoAcompanhante');";
$sql .="INSERT INTO anamnese_emerg (sinais_sintomas, outras_vezes, quando_aconteceu, problema_de_saude, quais_problemas, usa_medicacao, horario_medicacao, quais_medicacoes, alergico, qual_alergia, ingeriu_alimento, hora_ingeriu) VALUES ('$anamnese', '$anamVezes', '$horaAconteceu', '$problemaSaude', '$quaisProblemas', '$usaMedicacao', '$horarioMedicacao', '$quaisMedicacoes', '$alergico', '$qualAlergia', '$ingeriuAlgo', '$horaIngeriu');";
$sql .="INSERT INTO anamnese_gest (pre_natal, periodo_gest, nome_medico, complicacao, primeiro_filho, quantos, contracoes, horario_contracoes, intervalo_contracoes, duracao_contracoes, pressao_ou_evacuar, ruptura_bolsa, inspecao_visual, parto_realizado, sexo_bebe) VALUES ('$preNatal', '$periodoGest', '$nomeMedico', '$complicacao', '$primeiroFilho', '$quantosFilhos', '$contracao', '$horaContracao', '$intervalo', '$duracao', '$pressao', '$ruptura', '$inspecao', '$parto', '$sexoBebe');";
$sql .="INSERT INTO avaliacao (total_gsc) VALUES ('$totalGsc');";
$sql .="INSERT INTO sinais_vitais (mmHg, bcpm, respiracao, saturacao, hgt, temperatura) VALUES ('$mmHg', '$bcpm', '$mrm', '$saturacao', '$hgt', '$temperatura');";
$sql. ="INSERT INTO problem_suspeito (tipo_problema) VALUES ('$') "

if ($conexao->multi_query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
    echo $mmHg . $bcpm . $mrm . $saturacao . $hgt . $temperatura ;
} else {
    echo "Erro ao inserir dados: " . $conexao->error;
}
$conexao->close()
?>