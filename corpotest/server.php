<?php

include("../database/conexao.php");

$sql = mysqli_prepare($conexao, "INSERT INTO localizacao_trauma (localizacao_aprox, tipo_trauma) VALUES (?, ?)");
mysqli_stmt_bind_param($sql, 'ss', $parte1, $tipo1);

if (mysqli_stmt_execute($sql)) {
    echo 'Inserção bem-sucedida';
} else {
    echo 'Erro na inserção: ' . mysqli_error($conexao);
}


?>
