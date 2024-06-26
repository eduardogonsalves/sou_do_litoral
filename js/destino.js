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

            // Variáveis para restaurantes

            var a1 = document.getElementById('1').textContent;
            var a2 = document.getElementById('2').textContent;
            var a3 = document.getElementById('3').textContent;

            var b1 = document.getElementById('4').textContent;
            var b2 = document.getElementById('5').textContent;
            var b3 = document.getElementById('6').textContent;

            var c1 = document.getElementById('7').textContent;
            var c2 = document.getElementById('8').textContent;
            var c3 = document.getElementById('9').textContent;

            var d1 = document.getElementById('10').textContent;
            var d2 = document.getElementById('11').textContent;
            var d3 = document.getElementById('12').textContent;

            var e1 = document.getElementById('13').textContent;
            var e2 = document.getElementById('14').textContent;
            var e3 = document.getElementById('15').textContent;

            var f1 = document.getElementById('16').textContent;
            var f2 = document.getElementById('17').textContent;
            var f3 = document.getElementById('18').textContent;

            var g1 = document.getElementById('19').textContent;
            var g2 = document.getElementById('20').textContent;
            var g3 = document.getElementById('21').textContent;

            var h1 = document.getElementById('22').textContent;
            var h2 = document.getElementById('23').textContent;
            var h3 = document.getElementById('24').textContent;

            var i1 = document.getElementById('25').textContent;
            var i2 = document.getElementById('26').textContent;
            var i3 = document.getElementById('27').textContent;

            var j1 = document.getElementById('28').textContent;
            var j2 = document.getElementById('29').textContent;
            var j3 = document.getElementById('30').textContent;

            var k1 = document.getElementById('31').textContent;
            var k2 = document.getElementById('32').textContent;
            var k3 = document.getElementById('33').textContent;

            var l1 = document.getElementById('34').textContent;
            var l2 = document.getElementById('35').textContent;
            var l3 = document.getElementById('36').textContent;

            var m1 = document.getElementById('37').textContent;
            var m2 = document.getElementById('38').textContent;
            var m3 = document.getElementById('39').textContent;

            var n1 = document.getElementById('40').textContent;
            var n2 = document.getElementById('41').textContent;
            var n3 = document.getElementById('42').textContent;

            var o1 = document.getElementById('43').textContent;
            var o2 = document.getElementById('44').textContent;
            var o3 = document.getElementById('45').textContent;

            // Variáveis para postos de saúde

            var p1 = document.getElementById('46').textContent;
            var p2 = document.getElementById('47').textContent;
            var p3 = document.getElementById('48').textContent;

            var q1 = document.getElementById('49').textContent;
            var q2 = document.getElementById('50').textContent;
            var q3 = document.getElementById('51').textContent;

            var r1 = document.getElementById('52').textContent;
            var r2 = document.getElementById('53').textContent;
            var r3 = document.getElementById('54').textContent;

            var s1 = document.getElementById('55').textContent;
            var s2 = document.getElementById('56').textContent;
            var s3 = document.getElementById('57').textContent;

            var t1 = document.getElementById('58').textContent;
            var t2 = document.getElementById('59').textContent;
            var t3 = document.getElementById('60').textContent;

            // Variáveis para postos policiais

            var u1 = document.getElementById('61').textContent;
            var u2 = document.getElementById('62').textContent;
            var u3 = document.getElementById('63').textContent;

            var v1 = document.getElementById('64').textContent;
            var v2 = document.getElementById('65').textContent;
            var v3 = document.getElementById('66').textContent;

            var x1 = document.getElementById('67').textContent;
            var x2 = document.getElementById('68').textContent;
            var x3 = document.getElementById('69').textContent;

            // Marcadores para Restaurantes

            var data = {
                restaurantes: [

                    {lat: a1, lng: a2, name: a3},
                    {lat: b1, lng: b2, name: b3},
                    {lat: c1, lng: c2, name: c3},
                    {lat: d1, lng: d2, name: d3},
                    {lat: e1, lng: e2, name: e3},
                    {lat: f1, lng: f2, name: f3},
                    {lat: g1, lng: g2, name: g3},
                    {lat: h1, lng: h2, name: h3},
                    {lat: i1, lng: i2, name: i3},
                    {lat: j1, lng: j2, name: j3},
                    {lat: k1, lng: k2, name: k3},
                    {lat: l1, lng: l2, name: l3},
                    {lat: m1, lng: m2, name: m3},
                    {lat: n1, lng: n2, name: n3},
                    {lat: o1, lng: o2, name: o3},

                ],

                // Marcadores para Postos de Saúde

                saude: [
                    
                    {lat: p1, lng: p2, name: p3},
                    {lat: q1, lng: q2, name: q3},
                    {lat: r1, lng: r2, name: r3},
                    {lat: s1, lng: s2, name: s3},
                    {lat: t1, lng: t2, name: t3},

                    
                ],

                // Marcadores para Postos Policiais

                policia: [
                    
                    {lat: u1, lng: u2, name: u3},
                    {lat: v1, lng: v2, name: v3},
                    {lat: x1, lng: x2, name: x3},

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