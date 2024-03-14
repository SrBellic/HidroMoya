var mymap;

function ubicar() {
    var municipioSelect = document.getElementById('municipioSelect');
    var municipio = municipioSelect.options[municipioSelect.selectedIndex].value;

    // Objeto que mapea los municipios a sus coordenadas
    var coordenadasMunicipios = {
        'Baruta': { latitud: 10.48801, longitud: -66.87919 },
        'Chacao': { latitud: 10.493901070376198, longitud: -66.85661500727402 },
        'El Hatillo': { latitud: 10.39417277134644, longitud: -66.79371300565919 },
        'Libertador': { latitud: 10.505117742193491, longitud: -66.91465318991739 },
        'Sucre': { latitud: 10.490838944061391, longitud: -66.81981548852444}
    };

    // Obtener las coordenadas del municipio seleccionado
    var latitud = coordenadasMunicipios[municipio].latitud;
    var longitud = coordenadasMunicipios[municipio].longitud;

    // Si ya existe un mapa, lo eliminamos
    if (mymap) {
        mymap.remove();
    }

    // Creamos un nuevo mapa y lo añadimos al contenedor con el id "mapid"
    mymap = L.map('mapid').setView([latitud, longitud], 13);

    // Añadimos la capa de OpenStreetMap al mapa
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    // Agregamos un marcador en la ubicación del municipio seleccionado
    L.marker([latitud, longitud]).addTo(mymap)
        .bindPopup(municipio)
        .openPopup();
}