function initMap(){

  var options = {
    center: {lat: 56.952155458957925, lng: 24.13782626948902},
    zoom: 13,
    streetViewControl: false,
    mapTypeControl: false,
    fullscreenControl: false,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.RIGHT_CENTER,
    },
    styles: [
      {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#e9e9e9"
              },
              {
                  "lightness": 17
              }
          ]
      },
      {
          "featureType": "landscape",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f5f5f5"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 17
              }
          ]
      },
      {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 29
              },
              {
                  "weight": 0.2
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 18
              }
          ]
      },
      {
          "featureType": "road.local",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f5f5f5"
              },
              {
                  "lightness": 21
              }
          ]
      },
      {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#dedede"
              },
              {
                  "lightness": 21
              }
          ]
      },
      {
          "elementType": "labels.text.stroke",
          "stylers": [
              {
                  "visibility": "on"
              },
              {
                  "color": "#ffffff"
              },
              {
                  "lightness": 16
              }
          ]
      },
      {
          "elementType": "labels.text.fill",
          "stylers": [
              {
                  "saturation": 36
              },
              {
                  "color": "#333333"
              },
              {
                  "lightness": 40
              }
          ]
      },
      {
          "elementType": "labels.icon",
          "stylers": [
              {
                  "visibility": "off"
              }
          ]
      },
      {
          "featureType": "transit",
          "elementType": "geometry",
          "stylers": [
              {
                  "color": "#f2f2f2"
              },
              {
                  "lightness": 19
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.fill",
          "stylers": [
              {
                  "color": "#fefefe"
              },
              {
                  "lightness": 20
              }
          ]
      },
      {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
              {
                  "color": "#fefefe"
              },
              {
                  "lightness": 17
              },
              {
                  "weight": 1.2
              }
          ]
      }
  ]
  }
  map = new google.maps.Map(document.getElementById("map"), options)

  function addMarker(properties){
    const marker = new google.maps.Marker({
        position: properties.location,
        map: map,
        icon:"assets/img/marker.png",
      });

    if(properties.content){
        const info = new google.maps.InfoWindow({
        content: properties.content 
      });
      marker.addListener("click", (e) => {
        info.open(map, marker);
      });
    }
    }
    addMarker({location: {lat: 56.95812307918564, lng: 24.191002111817884},
      content: `
      <div class="marker-info">
      <img src="assets/img/purch.png" alt="PURCH restaurant">
        <div class="marker-info-text">
          <h4>PURCH restaurant</h4>
          <p>+371 25425254 <br> Dzelzavas iela 51A</p>
        </div>
      </div>
      `});
    addMarker({location: {lat: 56.95133874972907, lng: 24.12072884065329},
      content: `
      <div class="marker-info">
      <img src="assets/img/kurts.png" alt="Kurts coffee">
        <div class="marker-info-text">
          <h4>Kurts coffee</h4>
          <p>+371 23202079 <br> Tērbatas iela 2i</p>
        </div>
      </div>
      `});
    addMarker({location: {lat: 56.96536109594863, lng: 24.14051084065385},
      content: `
      <div class="marker-info">
      <img src="assets/img/kurts.png" alt="Kurts coffee">
        <div class="marker-info-text">
          <h4>Kurts coffee</h4>
          <p>+371 23202079 <br> Cēsu iela 20</p>
        </div>
      </div>`
    });
}

