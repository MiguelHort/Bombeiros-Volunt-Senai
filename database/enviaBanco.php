<?php
include('../database/conexao.php');
// Recebe os dados do formulário
$data = $_POST['day'] . '/' . $_POST['month'] . '/' . $_POST['year']; // Data
$nomePaciente = $_POST['inputs']; // Nome do paciente
$cpfPaciente = $_POST['inputcpf']; // CPF do paciente
$sexoPaciente = $_POST['sexo']; // Sexo do paciente

// Insere os dados na tabela 'paciente'
$sql = "INSERT INTO paciente (data, nome, rg_cpf, sexo) VALUES ('$data', '$nomePaciente', '$cpfPaciente', '$sexoPaciente')";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}
?>