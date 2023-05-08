<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" href="{{asset('plugins/leaflet/leaflet.css')}}">
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User Interface</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maps</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav sidenav">
        <div class="sidenav-content">
            <a href="#mapBasic" class="active nav-link">Basic</a>
            <a href="#mapPanes" class="nav-link">Panes</a>
            <a href="#mapInteractive" class="nav-link">Interactive Choropleth</a>
        </div>
    </div>

    <div class="row">
        <div id="mapBasic" class="col-lg-12 layout-top-spacing layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div id="basic-map" class="leaflet-map" style="height: 400px"></div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                                <pre>
/**
* 
*  Basic 
*/

var map = L.map('basic-map').setView([51.505, -0.09], 13);

var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=[MapBox_Access_Token]', {
maxZoom: 18,
attribution: 'Map data &copy; &lt;a href=&quot;https://www.openstreetmap.org/copyright&quot;&gt;OpenStreetMap&lt;/a&gt; contributors, ' +
'Imagery &copy; &lt;a href=&quot;https://www.mapbox.com/&quot;&gt;Mapbox&lt;/a&gt;',
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1
}).addTo(map);

var marker = L.marker([51.5, -0.09]).addTo(map);</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="mapPanes" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Panes</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div id="map-panes" class="leaflet-map" style="height: 400px"></div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
*  Live Location
*/

var liveLocation = L.map('live-location').fitWorld();

var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=[MapBox_Access_Token]', {
maxZoom: 18,
attribution: 'Map data &copy; &lt;a href=&quot;https://www.openstreetmap.org/copyright&quot;&gt;OpenStreetMap&lt;/a&gt; contributors, ' +
'Imagery &copy; &lt;a href=&quot;https://www.mapbox.com/&quot;&gt;Mapbox&lt;/a&gt;',
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1
}).addTo(liveLocation);

function onLocationFound(e) {
var radius = e.accuracy / 2;

var locationMarker = L.marker(e.latlng).addTo(liveLocation)
.bindPopup('You are within ' + radius + ' meters from this point').openPopup();

var locationCircle = L.circle(e.latlng, radius).addTo(liveLocation);
}

function onLocationError(e) {
alert(e.message);
}

liveLocation.on('locationfound', onLocationFound);
liveLocation.on('locationerror', onLocationError);

liveLocation.locate({setView: true, maxZoom: 16});</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="mapInteractive" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Interactive Choropleth Map</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div id="interactive-map" class="leaflet-map" style="height: 400px"></div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>Code</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
*  Interactive Choropleth Map
*/

var interactiveMap = L.map('interactive-map').setView([37.8, -96], 4);

var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=[MapBox_Access_Token]', {
maxZoom: 18,
attribution: 'Map data &copy; &lt;a href=&quot;https://www.openstreetmap.org/copyright&quot;&gt;OpenStreetMap&lt;/a&gt; contributors, ' +
'Imagery &copy; &lt;a href=&quot;https://www.mapbox.com/&quot;&gt;Mapbox&lt;/a&gt;',
id: 'mapbox/light-v9',
tileSize: 512,
zoomOffset: -1
}).addTo(interactiveMap);


// control that shows state info on hover
var info = L.control();

info.onAdd = function (interactiveMap) {
this._div = L.DomUtil.create('div', 'info');
this.update();
return this._div;
};

info.update = function (props) {
this._div.innerHTML = '&lt;h4&gt;US Population Density&lt;/h4&gt;' +  (props ?
'&lt;b&gt;' + props.name + '&lt;/b&gt;&lt;br /&gt;' + props.density + ' people / mi&lt;sup&gt;2&lt;/sup&gt;' : 'Hover over a state');
};

info.addTo(interactiveMap);


// get color depending on population density value
function getColor(d) {
return d &gt; 1000 ? '#800026' :
d &gt; 500  ? '#BD0026' :
d &gt; 200  ? '#E31A1C' :
d &gt; 100  ? '#FC4E2A' :
d &gt; 50   ? '#FD8D3C' :
d &gt; 20   ? '#FEB24C' :
d &gt; 10   ? '#FED976' : '#FFEDA0';
}

function style(feature) {
return {
weight: 2,
opacity: 1,
color: 'white',
dashArray: '3',
fillOpacity: 0.7,
fillColor: getColor(feature.properties.density)
};
}

function highlightFeature(e) {
var layer = e.target;

layer.setStyle({
weight: 5,
color: '#666',
dashArray: '',
fillOpacity: 0.7
});

if (!L.Browser.ie &amp;&amp; !L.Browser.opera &amp;&amp; !L.Browser.edge) {
layer.bringToFront();
}

info.update(layer.feature.properties);
}

var geojson;

function resetHighlight(e) {
geojson.resetStyle(e.target);
info.update();
}

function zoomToFeature(e) {
interactiveMap.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
layer.on({
mouseover: highlightFeature,
mouseout: resetHighlight,
click: zoomToFeature
});
}

/* global statesData */
geojson = L.geoJson(statesData, {
style: style,
onEachFeature: onEachFeature
}).addTo(interactiveMap);

interactiveMap.attributionControl.addAttribution('Population data &copy; &lt;a href=&quot;http://census.gov/&quot;&gt;US Census Bureau&lt;/a&gt;');


var legend = L.control({position: 'bottomright'});

legend.onAdd = function (interactiveMap) {

var div = L.DomUtil.create('div', 'info legend');
var grades = [0, 10, 20, 50, 100, 200, 500, 1000];
var labels = [];
var from, to;

for (var i = 0; i &lt; grades.length; i++) {
from = grades[i];
to = grades[i + 1];

labels.push(
'&lt;i style=&quot;background:' + getColor(from + 1) + '&quot;&gt;&lt;/i&gt; ' +
from + (to ? '&ndash;' + to : '+'));
}

div.innerHTML = labels.join('&lt;br&gt;');
return div;
};

legend.addTo(interactiveMap);</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/leaflet/us-states.js')}}"></script>
        <script src="{{asset('plugins/leaflet/eu-countries.js')}}"></script>
        <script src="{{asset('plugins/leaflet/leaflet.js')}}"></script>
        <script src="{{asset('plugins/leaflet/leaflet_script.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>