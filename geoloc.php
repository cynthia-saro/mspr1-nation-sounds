<!DOCTYPE html>
<html>
  <head>
    <title>Plan d'accès festival</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="map"></div>
    <script>
        var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), 
          
            {center: new google.maps.LatLng(48.826908, 2.454192), zoom: 14});

     var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            name: 'Parking',
            icon: iconBase + 'parking_lot_maps.png'
          },
          scene: {
            name: 'Scène',
            icon: iconBase + 'ranger_station.png'
          },
          info: {
            name: 'Info',
            icon: iconBase + 'info.png'
          },
               artist: {
            name: 'Rencontres avec les artistes',
            icon: iconBase + 'star.png'
          },
               handicap: {
            name: 'Accessibilité handicap',
            icon: iconBase + 'wheel_chair_accessible.png'
          },
          perdu: {
            name: 'Objets trouvés',
            icon: iconBase + 'realestate.png'
          },
          wc: {
            name: 'WC',
            icon: iconBase + 'toilets.png'
          },
              restauration: {
            name: 'Restauration',
            icon: iconBase + 'dining.png'
          },
             boutique: {
            name: 'Boutique',
            icon: iconBase + 'euro.png'
          }
            
        };


        var features = [
          {
            position: new google.maps.LatLng(48.83397490867 ,2.4453011344805),
            type: 'scene'
          }, {
            position: new google.maps.LatLng(48.82968091728676,2.455772478474614),
            type: 'scene'
          }, {
            position: new google.maps.LatLng(48.828889878734124,2.436374742879025),
            type: 'scene'
          }, {
            position: new google.maps.LatLng(48.820978806352,2.4401512931719),
            type: 'scene'
          }, {
            position: new google.maps.LatLng(48.825551 ,2.448540),
            type: 'info'
          }, {
            position: new google.maps.LatLng(48.837175 ,2.438785),
            type: 'parking'
          },{
            position: new google.maps.LatLng( 48.830280,2.465443),
            type: 'parking'
          },          
            {
            position: new google.maps.LatLng(48.828377, 2.444335),
            type: 'boutique'
          }, {
            position: new google.maps.LatLng(48.8268271, 2.4452883),
            type: 'restauration'
          },  {
            position: new google.maps.LatLng(48.835411303708, 2.4571858367166),
            type: 'restauration'
          }, {
            position: new google.maps.LatLng(48.8344984, 2.430534),
            type: 'wc'
          }, {
            position: new google.maps.LatLng(48.833296934496, 2.4573174308672),
            type: 'wc'
          }, {
            position: new google.maps.LatLng(48.829464, 2.460484),
            type: 'artist'
          }, {
            position: new google.maps.LatLng(48.823398, 2.446905),
            type: 'perdu'
          }, {
            position: new google.maps.LatLng(48.827143, 2.434092),
            type: 'handicap'
          },{
            position: new google.maps.LatLng(48.827058, 2.464359),
            type: 'handicap'
          }, {
            position: new google.maps.LatLng(48.826908, 2.454192),
            type: 'boutique'
          }, 
        ];

       
 
          infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('ici');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      
          
 
  

 
          

          
        // Create markers.
        for (var i = 0; i < features.length; i++) {
          var marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: map
          });
        };
          
             var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }

        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
 
          
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDKMoAAVdw2F4gzZ3j1-TP6YHD8wDKuEE&callback=initMap">
    </script>
  </body>
</html>