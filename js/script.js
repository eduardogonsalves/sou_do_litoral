// SoliDeoGloria

var destinos = [
    "Cabo Branco",
    "Tambau",
    "Londres",
    "Tóquio",
    "Roma",
    "Barcelona",
    "Rio de Janeiro",
    "Amsterdã",
    "Sidney",
    "Berlim"
];

var campoBusca = document.getElementById("campoBusca");
var listaSuspensa = document.getElementById("listaSuspensa");

campoBusca.addEventListener("input", function() {
var termoBusca = campoBusca.value.toLowerCase();
var destinosFiltrados = destinos.filter(function(destino) {
    return destino.toLowerCase().includes(termoBusca);
});

// Limpa a lista suspensa
listaSuspensa.innerHTML = "";

// Exibe a lista suspensa se houver destinos filtrados
if (termoBusca.length > 0 && destinosFiltrados.length > 0) {
    destinosFiltrados.forEach(function(destino) {
var li = document.createElement("li");
    li.textContent = destino;
    li.addEventListener("click", function() {
var destinoFormatado = destino.toLowerCase().replace(" ", "-");
    window.location.href = "./cabobranco.html?destino=" + destinoFormatado;
    });
    listaSuspensa.appendChild(li);
    });
    
// Calcula a posição do campo de busca
var campoBuscaRect = campoBusca.getBoundingClientRect();
var campoBuscaTop = campoBuscaRect.top + window.scrollY;
var campoBuscaLeft = campoBuscaRect.left + window.scrollX;
    
// Define a posição da lista suspensa com base na posição do campo de busca
    listaSuspensa.style.top = campoBuscaTop + campoBusca.offsetHeight - 5 + "px"; // Ajuste de -5 pixels
    listaSuspensa.style.left = campoBuscaLeft + "px";

    listaSuspensa.style.display = "block"; // Exibe a lista suspensa
} else {
    listaSuspensa.style.display = "none"; // Oculta a lista suspensa se não houver destinos filtrados
    }
    });


// Fecha a lista suspensa quando clicar fora dela
document.addEventListener("click", function(event) {
if (!listaSuspensa.contains(event.target) && event.target !== campoBusca) {
    listaSuspensa.style.display = "none";
    }
});