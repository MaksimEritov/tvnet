var citymap = {
    chicago: {
        center: { lat: 40.203657, lng: 44.465940 },
        population: 200
    },
    newyork: {
        center: { lat: 40.219424, lng: 44.489948 },
        population: 200
    },
    /* losangeles: {
         center: {lat: 34.052, lng: -118.243},
         population: 3857799
     },
     vancouver: {
         center: {lat: 49.25, lng: -123.1},
         population: 603502
     }*/
};

function initMap() {
    // Create the map.
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: { lat: 40.188437, lng: 44.514057 }
    });

    // Construct the circle for each value in citymap.
    // Note: We scale the area of the circle based on the population.
    for (var city in citymap) {
        // Add the circle for this city to the map.
        var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: citymap[city].center,
            radius: Math.sqrt(citymap[city].population) * 100
        });
    }
}