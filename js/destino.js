// SoliDeoGloria

// Slides (carrossel de imagens)


    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.querySelectorAll('.slide');
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = 'block';  
        setTimeout(showSlides, 2000); // Troca de imagem a cada 2 segundos (2000 milissegundos)
    }




    // Configuração do Mapa        
        
    // Inicializar o mapa Leaflet
    var map = L.map('map').setView([lat, lng], 13);


        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Marcadores para Restaurantes

        var data = {
        restaurantes: [

            //{lat: <?php echo $destino['lat_rest1']; ?>, lng: <?php echo $destino['long_rest1']; ?>, name:'<?php echo $destino['nome_rest1']; ?>'},
        
        ],

        // Marcadores para Postos de Saúde

        saude: [
            {lat: -7.143929, lng: -34.817023, name: 'USF Cidade Recreio'},
            {lat: -7.136031, lng: -34.827701, name: 'USF - Altiplano I E II'},
            {lat: -7.109241, lng: -34.837266, name: 'Posto De Saúde - Manaíra'},
            {lat: -7.112383, lng: -34.824532, name: 'Unidade Básica de Saúde das Praias'},
            {lat: -7.097512, lng: -34.839729, name: 'UPA Oceania'},
            
        ],

        // Marcadores para Postos Policiais

        policia: [
            {lat: -7.133229, lng: -34.830254, name: 'PM - CEATur'},
            {lat: -7.113698, lng: -34.829431, name: 'Delegacia Distrital de Tambaú'},
            {lat: -7.104421, lng: -34.837147, name: 'DISP - Distrito Integrado de Segurança Pública'},
        
        ],
 
        


        };

        var markers = [];

        // Função para mostrar marcadores de uma categoria específica

        function showMarkers(category) {
        // Remover todos os marcadores existentes
        markers.forEach(function(marker) {
            map.removeLayer(marker);
        });
        markers = [];

        // Adicionar novos marcadores da categoria selecionada
        data[category].forEach(function(item) {
            var marker = L.marker([item.lat, item.lng])
                .bindPopup(item.name)
                .addTo(map);
            markers.push(marker);
        });
        }

        // Exibir marcadores da primeira categoria por padrão
        showMarkers('restaurantes');
  





/*
// Configurações da Previsão do Tempo - Coluna da Direita

const apiKey = 'f6abdaa1efa90cf24dc3e65d72b8e87e';  // Chave de API do OpenWeather

const city = 'cidade';  // Colocar a cidade de acordo com o destino (João Pessoa, Conde, Cabedelo...)

const weatherImages = {
    clear: './imagens/previsao/clear.png',
    clouds: './imagens/previsao/cloud.png',
    mist: './imagens/previsao/mist.png',
    rain: './imagens/previsao/rain.png',
    snow: './imagens/previsao/snow.png',
    error: './imagens/previsao/404.png'
};

function fetchWeatherData() {
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${encodeURIComponent(city)}&units=metric&appid=${apiKey}&lang=pt_br`;

    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro HTTP! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            const location = document.getElementById('location');
            const temperature = document.getElementById('temperature');
            const description = document.getElementById('description');
            const icon = document.getElementById('icon');
            const wind = document.getElementById('wind');
            const humidity = document.getElementById('humidity');
            const clouds = document.getElementById('clouds');

            location.textContent = `${data.name}, ${data.sys.country}`;
            temperature.textContent = `${data.main.temp} °C`;
            description.textContent = capitalizeFirstLetter(data.weather[0].description);
            wind.textContent = `💨 Vento: ${data.wind.speed} m/s`;
            humidity.textContent = `Umidade: ${data.main.humidity}%`;
            clouds.textContent = `Cobertura de Nuvens: ${data.clouds.all}%`;

            const weatherMain = data.weather[0].main.toLowerCase();
            const weatherImage = weatherImages[weatherMain] || weatherImages.error;
            icon.innerHTML = `<img src="${weatherImage}" alt="Icone do tempo">`;
        })
        .catch(error => {
            console.error('Erro ao buscar dados da API:', error);
            alert('Erro ao buscar dados da API: ' + error.message);
            document.getElementById('icon').innerHTML = `<img src="${weatherImages.error}" alt="Erro ao carregar ícone">`;
        });
}

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

// Chama a função para buscar e exibir os dados meteorológicos
fetchWeatherData();




// Configuração do Mapa - Coluna Central
var map = L.map('map').setView([lat_cidade, long_cidade], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


// Marcadores para Restaurantes

var data = {
    restaurantes: [
        {lat: lat_rest1, lng: long_rest1, name:'nome_rest1'},
        {lat: lat_rest2, lng: long_rest2, name:'nome_rest2'},
        {lat: lat_rest3, lng: long_rest3, name:'nome_rest3'},
        {lat: lat_rest4, lng: long_rest4, name:'nome_rest4'},
        {lat: lat_rest5, lng: long_rest5, name:'nome_rest5'},
        {lat: lat_rest6, lng: long_rest6, name:'nome_rest6'},
        {lat: lat_rest7, lng: long_rest7, name:'nome_rest7'},
        {lat: lat_rest8, lng: long_rest8, name:'nome_rest8'},
        {lat: lat_rest9, lng: long_rest9, name:'nome_rest9'},
        {lat: lat_rest10, lng: long_rest10, name:'nome_rest10'},
        {lat: lat_rest11, lng: long_rest11, name:'nome_rest11'},
        {lat: lat_rest12, lng: long_rest12, name:'nome_rest12'},
        {lat: lat_rest13, lng: long_rest13, name:'nome_rest13'},
        {lat: lat_rest14, lng: long_rest14, name:'nome_rest14'},
        {lat: lat_rest15, lng: long_rest15, name:"nome_rest15"},
        
    ],

    // Marcadores para Postos de Saúde

    saude: [
        {lat: lat_saude1, lng: long_saude1, name: 'nome_saude1'},
        {lat: lat_saude2, lng: long_saude2, name: 'nome_saude2'},
        {lat: lat_saude3, lng: long_saude3, name: 'nome_saude3'},
        {lat: lat_saude4, lng: long_saude4, name: 'nome_saude4'},
        {lat: lat_saude5, lng: long_saude5, name: 'nome_saude5'},         
    ],

    // Marcadores para Postos Policiais

    policia: [
        {lat: lat_policia1, lng: long_policia1, name: 'nome_policia1'},
        {lat: lat_policia2, lng: long_policia2, name: 'nome_policia2'},
        {lat: lat_policia3, lng: long_policia3, name: 'nome_policia3'},    
     ]
};

var markers = [];

// Função para mostrar marcadores de uma categoria específica

function showMarkers(category) {
    // Remover todos os marcadores existentes
    markers.forEach(function(marker) {
        map.removeLayer(marker);
    });
    markers = [];

    // Adicionar novos marcadores da categoria selecionada
    data[category].forEach(function(item) {
        var marker = L.marker([item.lat, item.lng])
            .bindPopup(item.name)
            .addTo(map);
        markers.push(marker);
    });
}

// Exibir marcadores da primeira categoria por padrão
showMarkers('restaurantes');

*/