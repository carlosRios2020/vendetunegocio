function localizacion_coordenadas() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(datos_localizacion_coordenadas,error,{ maximumAge: 100, timeout: 6000, enableHighAccuracy: true});
        } else {
        alert('Tu navegador no soporta geolocalizacion.');
        }
    }
    
    function datos_localizacion_coordenadas(pos) {
    
        var latitud = pos.coords.latitude;
        var longitud = pos.coords.longitude;
        var precision = pos.coords.accuracy;
        
    }
