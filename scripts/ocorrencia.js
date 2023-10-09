const dayInput = document.getElementById('day');
const monthInput = document.getElementById('month');
const yearInput = document.getElementById('year');

dayInput.addEventListener('input', formatInput);
monthInput.addEventListener('input', formatInput);

function formatInput() {
  if (dayInput.value.length === 2 && monthInput.value.length === 2) {
    yearInput.focus();
  }
}


// seleção de opção do acompanhante 

function mudarCor(botao) {
  // Remova a classe "selecionado" de todos os botões
  var botoes = document.querySelectorAll('.botaoderelação');
  for (var i = 0; i < botoes.length; i++) {
    botoes[i].classList.remove('selecionado');
  }

  // Adicione a classe "selecionado" apenas ao botão clicado
  botao.classList.add('selecionado');
}




// Expandir


function toggleExpand() {
  var expandText = document.getElementById("expandText");
  var arrow = document.getElementById("arrow");

  expandText.classList.toggle("show");
  arrow.classList.toggle("rotate");}

function toggleExpand1() {
  var expandText = document.getElementById("expandText1");
  var arrow = document.getElementById("arrow1");

  expandText.classList.toggle("show");
  arrow.classList.toggle("rotate");}

  function toggleExpand2() {
    var expandText = document.getElementById("expandText2");
    var arrow = document.getElementById("arrow2");
  
    expandText.classList.toggle("show");
    arrow.classList.toggle("rotate");}





  // soma dos números selecionados

  const numeros = document.querySelectorAll('.numero');
  const totalElement = document.getElementById('total');
  let total = 0;

  numeros.forEach(numero => {
      numero.addEventListener('click', () => {
          const valor = parseInt(numero.getAttribute('data-valor'));
          if (numero.classList.contains('selecionado')) {
              // Desmarcar número
              numero.classList.remove('selecionado');
              total -= valor;
          } else {
              // Marcar número
              numero.classList.add('selecionado');
              total += valor;
          }
          totalElement.textContent = total;
      });
  });