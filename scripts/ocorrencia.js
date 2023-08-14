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


// Expandir

function toggleExpand() {
  var expandText = document.getElementById("expandText");
  var arrow = document.getElementById("arrow");

  expandText.classList.toggle("show");
  arrow.classList.toggle("rotate");}

  