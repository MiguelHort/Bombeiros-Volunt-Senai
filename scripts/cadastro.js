
document.getElementById("cadastrarButton").addEventListener("click", function(event) {
    // Obtém os valores dos campos de senha e confirmação de senha
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Verifica se as senhas são diferentes
    if (password !== confirmPassword) {
        // Cancela o evento de clique padrão do botão
        event.preventDefault();

        // Exibe uma mensagem de erro
        alert("As senhas não coincidem. Por favor, verifique.");
        console.log("são diferentes")
    } 
});

    var mostrarSenhaButton = document.getElementById("mostrarSenhaButton");
    var icon = document.getElementById("icon");

    var senhaVisivel = false;

    mostrarSenhaButton.addEventListener("click", function() {
        if (senhaVisivel) {
            password.type = "password";
            icon.src = "../img/olho.png";
            icon.alt = "Mostrar Senha";
            senhaVisivel = false;
        } else {
            password.type = "text";
            icon.src = "../img/visivel.png";
            icon.alt = "Ocultar Senha";
            senhaVisivel = true;
        }
    });


    var mostrarSenhaButton2 = document.getElementById("mostrarSenhaButton2");
    var icon2 = document.getElementById("icon2");

    var senhaVisivel2 = false;

    mostrarSenhaButton2.addEventListener("click", function() {
        if (senhaVisivel2) {
            confirmPassword.type = "password";
            icon2.src = "../img/olho.png";
            icon2.alt = "Mostrar Senha";
            senhaVisivel2 = false;
        } else {
            confirmPassword.type = "text";
            icon2.src = "../img/visivel.png";
            icon2.alt = "Ocultar Senha";
            senhaVisivel2 = true;
        }
    });