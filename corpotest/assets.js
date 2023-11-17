var parte1;   
var tipo1;

function mostrarModal(parte) {
    document.getElementById('modal').style.display = 'flex';
    parte1 = parte;
}

function selectTrauma(tipo) {
    document.getElementById('modal').style.display = 'none';
    tipo1 = tipo;
    var soma = tipo1 + " " + parte1;
    document.getElementById("tipo").innerHTML = soma;
}
