var map;
var streets = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
var layerGroup;

 
  var map = L.map('map').setView([-33.87, 150.77], 10);
  var layer = L.esri.basemapLayer('Topographic').addTo(map);
  var layerLabels;
  function setBasemap (basemap) {
    if (layer) {
      map.removeLayer(layer);
    }

    layer = L.esri.basemapLayer(basemap);

    map.addLayer(layer);

    if (layerLabels) {
      map.removeLayer(layerLabels);
    }

    if (
      basemap === 'ShadedRelief' ||
      basemap === 'Oceans' ||
      basemap === 'Gray' ||
      basemap === 'DarkGray' ||
      basemap === 'Terrain'
    ) {
      layerLabels = L.esri.basemapLayer(basemap + 'Labels');
      map.addLayer(layerLabels);
    } else if (basemap.includes('Imagery')) {
      layerLabels = L.esri.basemapLayer('ImageryLabels');
      map.addLayer(layerLabels);
    }
  }

  document
    .querySelector('#basemaps')
    .addEventListener('change', function (e) {
      var basemap = e.target.value;
      setBasemap(basemap);
    });
  
    $(window).on('load',function(){
      map.locate({setView: true, maxZoom: 15});
    });
    var geocodeService = L.esri.Geocoding.geocodeService();
    map.on('locationfound', onLocationFound);
   
  
    function onLocationFound(e) {
        console.log(e); 
        
        geocodeService.reverse().latlng(e.latlng).run(function (error, result) {
      if (error) {
        return;
      }
  
      L.marker(result.latlng).addTo(map).bindPopup("<b>Your position is </b>" + result.address.Match_addr).openPopup();
      var circle = L.circle(e.latlng, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(map);

    });
    }
   
   
var x = document.getElementById("data");
  x.addEventListener("change", function() {
    $('#data').click(function(){ 
  
const countryname = $('#data').val();

applyCountryBorder(countryname );




function applyCountryBorder( countryname) {
  if (layerGroup){
        map.removeLayer(layerGroup);
    }
  jQuery
    .ajax({
      type: "GET",
      dataType: "json",
      url:
        "https://nominatim.openstreetmap.org/search?country=" +
        countryname.trim() +
        "&polygon_geojson=1&format=json"
    })
    .then(function(data) {
      var bounds = new L.LatLngBounds([data[0].boundingbox[0],data[0].boundingbox[2]],[data[0].boundingbox[1],data[0].boundingbox[3]]);
          map.fitBounds(bounds)
          layerGroup = new L.LayerGroup();
        layerGroup.addTo(map);
        L.geoJSON(data[0].geojson, {
          color: "green",
        weight: 8,
        opacity: 1,
        fillOpacity: 0.0 
        }).addTo(layerGroup);
      });
  }


    });
  });
          
        