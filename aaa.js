// funcao que altera a imagem de fundo
function trocaImagem(event) {
  // identifica a imagem no elemento html
  img = document.getElementById("img2");
  // elemento ranger
  filtro = document.getElementById("filtro").value;
  // altera o efeito
  img.style.WebkitFilter = "opacity(" + filtro + "%)"
  img.style.filter = "opacity(" + filtro  + "%)"
  console.log(filtro);
}


trocaImagem();














/*
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  // 
  console.log('movimento');
  output.innerHTML = this.value;
}

function myFunction(x) {
  x.classList.toggle("change");
}
// funcao altera o filtro
function ChangeFilter(event) {
  Image = document.getElementById("img2");
  Filter = document.getElementById("myRange").value; 
  Image.style.WebkitFilter = "opacity(" + Filter * 10 + "%)"
}*/