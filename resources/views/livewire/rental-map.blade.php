<div>
    <div id="map"></div>
    <div id="info-card" class="mt-4"></div>

    @push('scripts')
    <script>
        document.addEventListener('livewire:initialized', function () {
            initializeMap();
        });

        function initializeMap() {
            // Inicializar el mapa
            const map = L.map('map').setView([21.5, -79.371], 8);

            // Agregar capa de mapa
            L.tileLayer('http://10.105.231.179:8080/styles/osm-bright/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            const infoCard = document.getElementById('info-card');
            const rentalPoints = @json($rentalPoints);
            const workshops = @json($workshops);
            const offices = @json($offices);


            // Colocar los marcadores de puntos de renta
            rentalPoints.forEach(point => {
                const customIcon = L.icon({
                    iconUrl: '/images/car.png',
                    iconSize: [42, 42],
                    iconAnchor: [21, 21],
                    popupAnchor: [0, -35]
                });

                const marker = L.marker([point.latitude, point.longitude], { icon: customIcon }).addTo(map);

                const popupContent = `
                            <div class="rental-point-card">
                                <h3><i class="fas fa-building fa-lg"></i> ${point.name}</h3>
                                <p><i class="fas fa-map-marker-alt fa-beat-fade"></i> ${point.address}</p>
                                <p><i class="fas fa-phone fa-shake"></i> ${point.phone}</p>
                                <p><i class="fas fa-envelope fa-bounce"></i> ${point.email}</p>
                                <p><i class="fas fa-car fa-flip"></i> Autos disponibles: ${point.available_cars}</p>
                                <p><i class="fas fa-info-circle fa-pulse"></i> ${point.description}</p>
                                <p class="status ${point.status === 'closed' ? 'closed' : ''}">
                                    <i class="fas fa-circle ${point.status === 'open' ? 'fa-beat' : ''}"></i>
                                    Estado: ${point.status === 'open' ? 'Abierto' : 'Cerrado'}
                                </p>
                            </div>
                        `;

                marker.bindPopup(popupContent);

                marker.on('mouseover', () => {
                    infoCard.style.display = 'block';
                    // infoCard.innerHTML = popupContent;
                });

                marker.on('mouseout', () => {
                    // infoCard.style.display = 'none';
                });
            });

            // Colocar los marcadores de talleres
            workshops.forEach(workshop => {
                const customIcon = L.icon({
                    iconUrl: '/images/tools.png',
                    iconSize: [42, 42],
                    iconAnchor: [21, 21],
                    popupAnchor: [0, -35]
                });

                const marker = L.marker([workshop.latitude, workshop.longitude], { icon: customIcon }).addTo(map);

                const popupContent = `
                    <div class="workshop-card">
                        <h3><i class="fas fa-tools fa-lg"></i> ${workshop.name}</h3>
                        <p><i class="fas fa-map-marker-alt fa-beat-fade"></i> ${workshop.address}</p>
                        <p><i class="fas fa-phone fa-shake"></i> ${workshop.phone}</p>
                        <p><i class="fas fa-envelope fa-bounce"></i> ${workshop.email}</p>
                        <p><i class="fas fa-wrench fa-flip"></i> Mecánicos disponibles: ${workshop.available_mechanics}</p>
                        <p><i class="fas fa-clock fa-pulse"></i> Horario: ${workshop.opening_time} - ${workshop.closing_time}</p>
                        <p><i class="fas fa-info-circle fa-pulse"></i> ${workshop.description}</p>
                        <p class="status ${workshop.status === 'closed' ? 'closed' : ''}">
                            <i class="fas fa-circle ${workshop.status === 'open' ? 'fa-beat' : ''}"></i>
                            Estado: ${workshop.status === 'open' ? 'Abierto' : 'Cerrado'}
                        </p>
                    </div>
                `;

                marker.bindPopup(popupContent);

                marker.on('mouseover', () => {
                    infoCard.style.display = 'block';
                    // infoCard.innerHTML = popupContent;
                });
            });

            // Colocar los marcadores de oficinas
            offices.forEach(office => {
                const customIcon = L.icon({
                    iconUrl: '/images/office.png',
                    iconSize: [42, 42],
                    iconAnchor: [21, 21],
                    popupAnchor: [0, -35]
                });

                const marker = L.marker([office.latitude, office.longitude], { icon: customIcon }).addTo(map);

                const popupContent = `
                    <div class="office-card">
                        <h3><i class="fas fa-building fa-lg"></i> ${office.name}</h3>
                        <p><i class="fas fa-map-marker-alt fa-beat-fade"></i> ${office.address}</p>
                        <p><i class="fas fa-phone fa-shake"></i> ${office.phone}</p>
                        <p><i class="fas fa-envelope fa-bounce"></i> ${office.email}</p>
                        <p><i class="fas fa-user-tie fa-flip"></i> Gerente: ${office.manager_name}</p>
                        <p><i class="fas fa-users fa-pulse"></i> Personal: ${office.staff_count}</p>
                        <p><i class="fas fa-clock fa-pulse"></i> Horario: ${new Date(office.opening_time).toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' })} - ${new Date(office.closing_time).toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' })}</p>
                        <p><i class="fas fa-info-circle fa-pulse"></i> ${office.description}</p>
                        <p class="status ${office.status === 'closed' ? 'closed' : ''}">
                            <i class="fas fa-circle ${office.status === 'open' ? 'fa-beat' : ''}"></i>
                            Estado: ${office.status === 'open' ? 'Abierto' : 'Cerrado'}
                        </p>
                    </div>
                `;

                marker.bindPopup(popupContent);

                marker.on('mouseover', () => {
                    infoCard.style.display = 'block';
                    // infoCard.innerHTML = popupContent;
                });
            });
        }

        // Reinicializar el mapa cuando Livewire actualice el componente
        document.addEventListener('livewire:navigated', function () {
            // Comprobar si estamos en la ruta '/map'
            if (window.location.pathname === '/map') {
                try {
                    initializeMap();
                } catch (error) {
                    console.error('Error al inicializar el mapa:' + error.message);
                }
            }
        });
    </script>
    @endPush
</div>
