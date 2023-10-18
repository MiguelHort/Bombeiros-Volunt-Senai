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




// seleção de opção do adulto e criança

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


    var checkbox = document.querySelector('#opcoesProced input[type="checkbox"]');
    var opcoesAdicionais = document.getElementById('opcoesAdicionais');

    // Adiciona um ouvinte de evento para o checkbox
    checkbox.addEventListener('change', function() {
        // Verifica se o checkbox está marcado
        if (checkbox.checked) {
            // Se estiver marcado, mostra as opções adicionais
            opcoesAdicionais.style.display = 'block';
        } else {
            // Se não estiver marcado, oculta as opções adicionais
            opcoesAdicionais.style.display = 'none';
        }
    });

    var checkbox2 = document.querySelector('#opcoesProced2 input[type="checkbox"]');
    var opcoesAdicionais2 = document.querySelector('.adicionaisChecks2Linha1');

    // Adiciona um ouvinte de evento para o checkbox
    checkbox2.addEventListener('change', function() {
        // Verifica se o checkbox está marcado
        if (checkbox2.checked) {
            // Se estiver marcado, mostra as opções adicionais
            opcoesAdicionais2.style.visibility = 'visible';
        } else {
            // Se não estiver marcado, oculta as opções adicionais
            opcoesAdicionais2.style.visibility = 'hidden';
        }
    });

    var checkbox3 = document.querySelector('#opcoesProced3 input[type="checkbox"]');
    var opcoesAdicionais3 = document.querySelector('.adicionaisChecks2Linha2');

    // Adiciona um ouvinte de evento para o checkbox
    checkbox3.addEventListener('change', function() {
        // Verifica se o checkbox está marcado
        if (checkbox3.checked) {
            // Se estiver marcado, mostra as opções adicionais
            opcoesAdicionais3.style.visibility = 'visible';
        } else {
            // Se não estiver marcado, oculta as opções adicionais
            opcoesAdicionais3.style.visibility = 'hidden';
        }
    });