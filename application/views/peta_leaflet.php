<div class="content"> ​

   <div id="map" style="width: 100%; height: 530px; color:black;">

   </div> ​

</div> 
<script>

// var
var prov = new L.LayerGroup();
var faskes = new L.LayerGroup();
var sungai = new L.LayerGroup();
var provin = new L.LayerGroup();
var sungaitangsel = new L.LayerGroup();
var ciputattimur = new L.LayerGroup();
var jalantangsel = new L.LayerGroup();
// end var


// map
var map = L.map('map', {
 center: [-1.7912604466772375, 116.42311966554416],
 zoom: 5,
 zoomControl: false,
 layers:[]
});
var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
maxZoom: 22,
attribution: 'Latihan Web GIS'
}).addTo(map);
//end map

// basemap esri
var Esri_NatGeoWorldMap =
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
attribution: 'Tiles &copy; Esri &mdash; National Geographic, Esri, DeLorme,NAVTEQ, UNEP-WCMC, USGS, NASA, ESA, METI, NRCAN, GEBCO, NOAA, iPC',
maxZoom: 16
});

// googlemaps
var GoogleMaps = new
L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { opacity: 1.0,
attribution: 'Latihan Web GIS'
});
//end googlemaps

//googleroads
var GoogleRoads = new
L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}',{
opacity: 1.0,
attribution: 'Latihan Web GIS'
});
//end google road


	// control layers
var baseLayers = {'Google Satellite Hybrid': GoogleSatelliteHybrid,'Esri_NatGeoWorldMap':Esri_NatGeoWorldMap,'GoogleMaps': GoogleMaps,'GoogleRoads':GoogleRoads};
// var overlayLayers = {}
// L.control.layers(baseLayers, overlayLayers, {collapsed: true}).addTo(map);
// end control layers

// provinsi
var groupedOverlays = {
"Peta Dasar":{
	'Ibu Kota Provinsi' :prov,
	'Jaringan Sungai':sungai,
	'Provinsi' :provin,
  'sungaitangsel': sungaitangsel,
  'ciputattimur' : ciputattimur,
  'jalantangsel' : jalantangsel
},
"Peta Khusus":{
	'Fasilitas Kesehatan' :faskes
}
};
L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);
// end provinsi


//mini map
var
osmUrl='https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
var osmAttrib='Map data &copy; OpenStreetMap contributors';
var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib });
var rect1 = {color: "#ff1100", weight: 3};
var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0};
var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright",
aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map);

//minimap

// geocoder
const geo = L.Control.geocoder({position :"topleft", collapsed:true}).addTo(map);
// endgecoder

// koordinat
/* GPS enabled geolocation control set to follow the user's location */
/* GPS enabled geolocation control set to follow the user's location */
var locateControl = L.control.locate({
position: "topleft",
drawCircle: true,
follow: true,
setView: true,
keepCurrentZoomLevel: true,
markerStyle: {
weight: 1,
opacity: 0.8,
fillOpacity: 0.8
},
circleStyle: {
weight: 1,
clickable: false
},
icon: "fa fa-location-arrow",
metric: false,
strings: {
title: "My location",
popup: "You are within {distance} {unit} from this point",
outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
},
locateOptions: {
maxZoom: 18,
watch: true,
enableHighAccuracy: true,
maximumAge: 10000,
timeout: 10000
}
}).addTo(map);
// koordinat

// controlzoombar
var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);
// end control zoombar


// leaflet coordinates
L.control.coordinates({
position:"bottomleft",
decimals:2,
decimalSeperator:",",
labelTemplateLat:"Latitude: {y}",
labelTemplateLng:"Longitude: {x}"
}).addTo(map);
/* scala */
L.control.scale({metric: true, position: "bottomleft"}).addTo(map);
// leaflet coordinates

// mata angin
var north = L.control({ position: 'bottomleft' });

north.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');
    div.innerHTML = '<img src="assets/arah-mata-angin.png" alt="Arah Mata Angin" style=width:200px>';
    return div;
};

north.addTo(map);
//mataangin


// geojson provinsi
$.getJSON("assets/provinsi.geojson",function(data){
var ratIcon = L.icon({
iconUrl: 'assets/images/Marker-1.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.CITY_NAME);
return marker;
}
}).addTo(prov);
});

// enndgeojson

//geojson rsu
$.getJSON("assets/rsu.geojson",function(data){
var ratIcon = L.icon({
iconUrl: 'assets/images/Marker-2.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//poliklinik geojson
$.getJSON("assets/poliklinik.geojson",function(data){
var ratIcon = L.icon({
iconUrl: 'assets/images/Marker-3.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//geojson puskesmas
$.getJSON("assets/puskesmas.geojson",function(data){
var ratIcon = L.icon({
iconUrl: 'assets/images/Marker-4.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//geojson sungai
$.getJSON("assets/sungai.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var color,
 kode = feature.properties.kode;
 if ( kode < 2 ) color = "#f2051d";
 else if ( kode > 0 ) color = "#f2051d";
 else color = "#f2051d"; // no data
 return { color: "#999", weight: 5, color: color, fillOpacity: .8 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup
 ()
 } }).addTo(sungai);
});
//end geojson

// sungai tangsel
$.getJSON("assets/sungitangsel.geojson", function (kode) {
  L.geoJson(kode, {
    style: function (feature) {
      var color = "#ffff00"; // warna kuning
      return { color: color, weight: 5, fillOpacity: 0.8 };
    },
    onEachFeature: function (feature, layer) {
      layer.bindPopup();
    },
  }).addTo(sungaitangsel);
});
// end sungai tangsel

// batas wilayah tangsel
$.getJSON("assets/ciputattimur.geojson", function (kode) {
  L.geoJson(kode, {
    style: function (feature) {
      var color = "#00FFFF"; // cyan
      return { color: color, weight: 5, fillOpacity: 0.10 };
    },
    onEachFeature: function (feature, layer) {
      layer.bindPopup();
    },
  }).addTo(ciputattimur);
});
// end wilayah tangsel

var markersDataBengkel = [
	{
    coords: [-6.2999279, 106.7502270],
    popupText: "<b>Kardi Mulia Motor</b><br>Jl. WR Supratman, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B1.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.303676, 106.753995],
    popupText: "<b>Planet Ban Motor WR Supratman</b><br>Jl. Kampung Utan, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B2.JPG' alt='Image 3' style='width:100%;'/><br>"
  },
  
  {
    coords: [-6.304248, 106.755493],
    popupText: "<b>Sahabat Motor 2</b><br>Jl. Kampung Utan, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B3.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.296692, 106.748034],
    popupText: "<b>Vincent Motor</b><br>Jl. Kampung Utan, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B4.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.294355, 106.747119],
    popupText: "<b>Shop & Bike</b><br>Jl. Kampung Utan, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B5.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.310154, 106.758771],
    popupText: "<b>Mora Motor</b><br>Jalan Kerta Mukti, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B6.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.306101, 106.757793],
    popupText: "<b>MJM Three Motor</b><br>Jalan Kerta Mukti, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B7.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.314757, 106.757457],
    popupText: "<b>Bengkel Tanpa Nama 1</b><br>Jalan Tarumanegara, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B8.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.313481, 106.754461],
    popupText: "<b>Bengkel Berkah Barokah</b><br>Jalan Legoso Raya, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B9.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.312648, 106.754786],
    popupText: "<b>Bengkel Castrol</b><br>Jalan Legoso Raya, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B10.JPG' alt='Image 3' style='width:100%;'/><br>"
  },


  {
    coords: [-6.312502, 106.754729],
    popupText: "<b>Planet Ban Motor Legoso</b><br>Jalan Legoso Raya, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B11.JPG' alt='Image 3' style='width:100%;'/><br>"
  },


  {
    coords: [-6.312388, 106.754847],
    popupText: "<b>Bengkel Tanpa Nama 2</b><br>Jalan Legoso Raya, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B12.JPG' alt='Image 3' style='width:100%;'/><br>"
  },


  {
    coords: [-6.310564, 106.754842],
    popupText: "<b>Bengkel Mizzle</b><br>Jalan Insinyur Haji Juanda, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B13.JPG' alt='Image 3' style='width:100%;'/><br>"
  },


  {
    coords: [-6.311824, 106.753067],
    popupText: "<b>Dunlop Ciputat Tire Center</b><br>Jalan Insinyur Haji Juanda, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B14.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

  {
    coords: [-6.309906, 106.755059],
    popupText: "<b>Semanggi Motor</b><br>Jalan Semanggi II, Ciputat Timur, Kota Tangerang Selatan, Banten, Indonesia<br><br><img src='assets/B15.JPG' alt='Image 3' style='width:100%;'/><br>"
  },

];

markersDataBengkel.forEach(function(marker) {
  var newMarker = L.marker(marker.coords).addTo(ciputattimur);
  newMarker.bindPopup(marker.popupText).openPopup();
});






// jalan tangsel
$.getJSON("assets/jalantangsel.geojson", function (kode) {
  L.geoJson(kode, {
    style: function (feature) {
      var color = "#FF8000"; // warna kuning
      return { color: color, weight: 5, fillOpacity: 0.20 };
    },
    onEachFeature: function (feature, layer) {
      layer.bindPopup();
    },
  }).addTo(jalantangsel);
});
// jalan tangsel


//geojson provinsi polygon
$.getJSON("assets/provinsi_polygon.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var fillColor,
 kode = feature.properties.kode;
 if ( kode > 21 ) fillColor = "#006837";
 else if (kode>20) fillColor="#fec44f"
 else if (kode>19) fillColor="#c2e699"
 else if (kode>18) fillColor="#fee0d2"
 else if (kode>17) fillColor="#756bb1"
 else if (kode>16) fillColor="#8c510a"
 else if (kode>15) fillColor="#01665e"
 else if (kode>14) fillColor="#e41a1c"
 else if (kode>13) fillColor="#636363"
 else if (kode>12) fillColor= "#762a83"
 else if (kode>11) fillColor="#1b7837"
 else if (kode>10) fillColor="#d53e4f"
 else if (kode>9) fillColor="#67001f"
 else if (kode>8) fillColor="#c994c7"
 else if (kode>7) fillColor="#fdbb84"
 else if (kode>6) fillColor="#dd1c77"
 else if (kode>5) fillColor="#3182bd"
 else if ( kode > 4 ) fillColor ="#f03b20"
 else if ( kode > 3 ) fillColor = "#31a354";
 else if ( kode > 2 ) fillColor = "#78c679";
 else if ( kode > 1 ) fillColor = "#c2e699";
 else if ( kode > 0 ) fillColor = "#ffffcc";
 else fillColor = "#f7f7f7"; // no data
 return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup(feature.properties.PROV)
 }
 }).addTo(provin);
 });
 //end geosjon
 
//end new map











</script>