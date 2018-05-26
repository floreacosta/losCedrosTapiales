$(document).ready(() => {
  initMap();
});

function initMap () {
  // Create a map object and specify the DOM element for display.
  let ubicacionLosCedros = {
    lat: -34.6994319,
    lng: -58.5061351
  };

  let map = new google.maps.Map(document.getElementById('google-map-container'), {
    center: ubicacionLosCedros,
    scrollwheel: true,
    zoom: 17,
    zoomControl: true
  });

  // This event listener calls addMarker() when the map is clicked.
  google.maps.event.addListener(map, 'click', (e) => {
    addMarker(e.latLng, map);
  });

  // Add a marker at the center of the map.
  addMarker(ubicacionLosCedros, map);

  // Adds a marker to the map.
  function addMarker (ubicacionLosCedros, map) {
    // Add the marker at the clicked location, and add the next-available label
    // from the array of alphabetical characters.
    let image = 'img/icon_map.png';
    let marker = new google.maps.Marker({
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: ubicacionLosCedros,
      title: 'Sanatorio Privado Madero',
      icon: image
    });

    marker.addListener('click', () => {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
      }
    });
  }
}
