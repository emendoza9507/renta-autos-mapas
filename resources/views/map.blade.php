<!DOCTYPE html>
<html>
<head>
    <title>Puntos de Renta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Estilos de Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Puntos de Renta de Autos</h1>
    <div id="map"></div>

    {{-- Leaflet JS --}}
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Inicializar el mapa
        const map = L.map('map').setView([23.1136, -82.3666], 13); // centro en La Habana por defecto

        // Agregar capa de mapa desde OpenStreetMap (temporalmente online)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Obtener los puntos desde Laravel
        const rentalPoints = @json($rentalPoints);

        // Colocar los marcadores
        rentalPoints.forEach(point => {
            const marker = L.marker([point.latitude, point.longitude]).addTo(map);
            marker.bindPopup(`<strong>${point.name}</strong><br>Autos disponibles: ${point.available_cars}`);
        });
    </script>

</body>
</html>