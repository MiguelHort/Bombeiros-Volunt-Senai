document.addEventListener("DOMContentLoaded", function() {
    // ...

    var lapises = document.querySelectorAll(".lapis");

    lapises.forEach(function(lapis) {
        lapis.addEventListener("click", function() {
            var equipeDiv = lapis.closest(".opcoesEquipes");
            var nomeEquipe = equipeDiv.querySelector(".nomeEquipe");
            var campoEdicao = equipeDiv.querySelector(".campoEdicao");
            var botaoConfirmar = equipeDiv.querySelector(".botaoConfirmar");

            // Exibir o campo de edição e o botão de confirmação, ocultar o parágrafo
            nomeEquipe.style.display = "none";
            campoEdicao.style.display = "block";
            botaoConfirmar.style.display = "block";

           // ...

botaoConfirmar.addEventListener("click", function() {
    var novoNomeEquipe = campoEdicao.value;
    var equipeId = lapis.getAttribute("data-equipe-id");

    // Enviar uma solicitação para atualizar o nome da equipe no banco de dados
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../database/atualizarEquipe.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // Se a atualização for bem-sucedida, exibir um alert de sucesso
                alert(response.success);
                // Atualize o parágrafo e oculte o campo de edição
                nomeEquipe.textContent = novoNomeEquipe;
                nomeEquipe.style.display = "block";
                campoEdicao.style.display = "none";
                botaoConfirmar.style.display = "none";
            } else if (response.error) {
                // Em caso de erro, exibir um alert de erro
                alert(response.error);
            }
        }
    };
    xhr.send("equipe_id=" + equipeId + "&novo_nome=" + novoNomeEquipe);
});

// ...

        });
    });

    // ...
});

document.addEventListener("DOMContentLoaded", function() {
    console.log("Tá aqui")
    // Selecionar todas as lixeiras
    var lixeiras = document.querySelectorAll(".lixeira");

    // Adicionar um evento de clique a cada lixeira
    lixeiras.forEach(function(lixeira) {
        console.log("entrou no forEach")
        lixeira.addEventListener("click", function() {
            console.log("função de clique")
            // Obter o ID da equipe da lixeira clicada
            var equipeId = lixeira.getAttribute("data-equipe-id");

            // Enviar uma solicitação para excluir a equipe do banco de dados
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../database/excluirEquipe.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Remover visualmente a equipe da interface após a exclusão
                    var equipeParaRemover = lixeira.closest(".opcoesEquipes");
                    equipeParaRemover.parentNode.removeChild(equipeParaRemover);
                }
            };
            xhr.send("equipe_id=" + equipeId);
        });
    });
});
