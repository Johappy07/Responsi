<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peta Kuliner Kabupaten Raja Ampat </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    
    <!-- Marker Cluster -->
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.css" />
    <link rel="stylesheet" href="assets/plugins/leaflet-markercluster/MarkerCluster.Default.css" />
    <!-- Routing -->
    <link rel="stylesheet" href="assets/plugins/leaflet-routing/leaflet-routing-machine.css" />
    <!-- Search CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-search/leaflet-search.css" />
    <!-- Geolocation CSS Library for Plugin -->
    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css" />
    <!-- Leaflet Mouse Position CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.css" />
    <!-- Leaflet Measure CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-measure/leaflet-measure.css" />
    <!-- EasyPrint CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-easyprint/easyPrint.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <style>
        html,
        body,
        #map {
            height: 96.8%;
            width: 100%;
            margin: 0px;
        }
        .info h2 {
            margin: 0 0 5px;
            color: #777;
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class >Peta Kuliner  Kabupaten Raja Ampat</i> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-sharp fa-solid fa-bars"></i> Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="index.html">Dasboard</a></li>
                            <li><a class="dropdown-item" href="index.php">Peta Wisata</a></li>
                            <li><a class="dropdown-item" href="index2.php">Peta Kuliner</a></li>
                            <li><a class="dropdown-item" href="index3.php">Peta Penginapan</a></li>                        
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="fa-solid fa-circle-info"></i> Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-circle-info "></i> Info
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nama: Johanes Berchmann Juvens Junior Pareira</p>
                    <p>NIM: 22/496923/SV/21050</p>
                    <p>Sumber data: <a href="https://www.indonesia.travel/id/id/destinasi/maluku-papua/raja-ampat"
                    target ="_blank">https://www.indonesia.travel/id/id/destinasi/maluku-papua/raja-ampat</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <div id="map"></div>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <!-- Include your GeoJSON data -->
    <script src="./data.js"></script>

    <!-- Leaflet and Plugins -->
    <!-- Leaflet JavaScript Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster.js"></script>
    <script src="assets/plugins/leaflet-markercluster/leaflet.markercluster-src.js"></script>
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.js"></script>
    <script src="assets/plugins/leaflet-routing/leaflet-routing-machine.min.js"></script>
    <script src="assets/plugins/leaflet-search/leaflet-search.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.js"></script>
    <script src="assets/plugins/leaflet-measure/leaflet-measure.js"></script>
    <script src="assets/plugins/leaflet-easyprint/leaflet.easyPrint.js"></script>

    <script>
        // Initialize the map
        var map = L.map("map").setView([-1.03204, 130.50521], 18);

        // Basemaps
        var basemap1 = L.tileLayer(
            "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 20,
                attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            }
        );
        basemap1.addTo(map);

        // Point 

        // Create a GeoJSON layer for polygon data
        var wfsgeoserver2 = L.geoJson(null, {
            style: function (feature) {
                // Adjust this function to define styles based on your polygon properties
                var namobj = feature.properties.namobj; // Change this to your actual property name
                return {
                    fillColor: getColor(namobj),
                    weight: 2,
                    opacity: 1,
                    color: "white",
                    dashArray: "3",
                    fillOpacity: 0.7,
                };
            },
            onEachFeature: function (feature, layer) {
                // Adjust the popup content based on your polygon properties
                var content =
                    "Kecamatan: " +
                    feature.properties.namobj +
                    "<br>";

                layer.bindPopup(content);
            },
        });

        // Fetch GeoJSON data from geoserver.php
        $.getJSON("wfsgeoserver2.php", function (data) {
            wfsgeoserver2.addData(data);
            wfsgeoserver2.addTo(map);
            map.fitBounds(wfsgeoserver2.getBounds());
        })

        // // Add GeoJSON data to the map
        // L.geoJson(data).addTo(map);

        // // Create a marker cluster group
        // var markers = L.markerClusterGroup();

        // // Add markers to the cluster group
        // markersArray.forEach(function (markerInfo) {
        //   var marker = L.marker(markerInfo.coordinates, markerInfo.options);
        //   marker.addTo(markers);
        //   marker.bindPopup(markerInfo.popupContent);
        // });

        // Title
        var title = new L.Control();
        title.onAdd = function (map) {
            this._div = L.DomUtil.create("div", "info");
            this.update();
            return this._div;
        };

        // Watermark 
        L.Control.Watermark = L.Control.extend({
            onAdd: function (map) {
                var container = L.DomUtil.create("div", "leaflet-control-watermark");
                var img = L.DomUtil.create("img", "watermark-image");
                img.src = "assets/img/logo/SIG.png";
                img.style.width = "120px";
                container.appendChild(img);
                return container;
            },
        });
        L.control.watermark = function (opts) {
            return new L.Control.Watermark(opts);
        };

        L.control.watermark({
            position: "bottomleft"
        }).addTo(map);

        // Legend
        L.Control.Legend = L.Control.extend({
            onAdd: function (map) {
                var img = L.DomUtil.create("img");
                img.src = "assets/img/legend/Legenda5.png";
                img.style.width = "250px";
                return img;
            },
        });
        L.control.Legend = function (opts) {
            return new L.Control.Legend(opts);
        };

        L.control.Legend({
            position: "bottomleft"
        }).addTo(map);
        // Basemaps
        var basemap1 = L.tileLayer(
            "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 20,
                attribution: 'Map data © <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            }
        );

        var basemap2 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}", {
                attribution: 'Tiles &copy; Esri | <a href="DIVSIGUGM" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap3 = L.tileLayer(
            "https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}", {
                attribution: 'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>',
            }
        );

        var basemap4 = L.tileLayer(
            "https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png", {
                attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            }
        );

        basemap3.addTo(map);

        var baseMaps = {
            OpenStreetMap: basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4,
        };

        L.control.layers(baseMaps).addTo(map);

        // Plugin Search
        var searchControl = new L.Control.Search({
            position: "topleft",
            layer: wfsgeoserver2, // Nama variabel layer
            propertyName: "namobj", // Field untuk pencarian
            marker: false,
            moveToLocation: function (latlng, title, map) {
                var zoom = map.getBoundsZoom(latlng.layer.getBounds());
                map.setView(latlng, zoom);
            },
        });

        searchControl
            .on("search:locationfound", function (e) {
                e.layer.setStyle({
                    fillColor: "#ffff00",
                    color: "#0000ff",
                });
            })
            .on("search:collapse", function (e) {
                wfsgeoserver2.eachLayer(function (layer) {
                    wfsgeoserver2.resetStyle(layer);
                });
            });

        map.addControl(searchControl);

        // Plugin Geolocation
        var locateControl = L.control
            .locate({
                position: "topleft",
                drawCircle: true,
                follow: true,
                setView: true,
                keepCurrentZoomLevel: false,
                markerStyle: {
                    weight: 1,
                    opacity: 0.8,
                    fillOpacity: 0.8,
                },
                circleStyle: {
                    weight: 1,
                    clickable: false,
                },
                icon: "fas fa-crosshairs",
                metric: true,
                strings: {
                    title: "Click for Your Location",
                    popup: "You're here. Accuracy {distance} {unit}",
                    outsideMapBoundsMsg: "Not available",
                },
                locateOptions: {
                    maxZoom: 16,
                    watch: true,
                    enableHighAccuracy: true,
                    maximumAge: 10000,
                    timeout: 10000,
                },
            })
            .addTo(map);

        // Plugin Mouse Position Coordinate
        L.control
            .mousePosition({
                position: "bottomright",
                separator: ",",
                prefix: "Point Coodinate: ",
            })
            .addTo(map);

        // Plugin Measurement Tool
        var measureControl = new L.Control.Measure({
            position: "topleft",
            primaryLengthUnit: "meters",
            secondaryLengthUnit: "kilometers",
            primaryAreaUnit: "hectares",
            secondaryAreaUnit: "sqmeters",
            activeColor: "#FF0000",
            completedColor: "#00FF00",
        });
    measureControl.addTo(map);

      // Plugin EasyPrint
    L.easyPrint({
        title: "Print",
    }).addTo(map);

      // Plugin Routing
    L.Routing.control({
        waypoints: [
            L.latLng(-0.44158, 130.76752),
            L.latLng(-0.40262, 130.81828),
        ],
        routeWhileDragging: true,
        position: 'bottomright',  // Menentukan posisi di bagian kanan bawah
    }).addTo(map);

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "raja";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM kuliner";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $lat = $row["latitude"];
                $long = $row["longitude"];
                $info = $row["nama"];
                $lokasi = $row["alamat"];
                $harga = $row["harga"];
                $jam = $row["jam"];
                echo "L.marker([$lat, $long]).addTo(map).bindPopup('Nama Restoran: $info <br> Lokasi Restoran: $lokasi <br> Harga: $harga <br> Jam: $jam');";
            } 
        }
        else {
            echo "0 results";
        }
            $conn->close();
    ?>
    
// Add the markers to the map
map.addLayer(markers);
      //Function to determine the color based on the 'value' attribute
    function getColor(namobj) {
    return namobj == "Wawarbomi"
        ? "#ff6666"
        : namobj == "Waisai Kota"
        ? "#ffcc66"
        : namobj == "Waigeo Utara"
        ? "#66ff66"
        : namobj == "Waigeo Timur"
        ? "#6666ff"
        : namobj == "Waigeo Selatan"
        ? "#cc66ff"
        : namobj == "Waigeo Barat Kepulauan"
        ? "#ff66cc"
        : namobj == "Waigeo Barat Daratan"
        ? "#66ccff"
        : namobj == "Waigeo Barat"
        ? "#ccff66"
        : namobj == "Tiplolmayalibit"
        ? "#ff9966"
        : namobj == "Telukmayalibit"
        ? "#9966ff"
        : namobj == "Teluk Mayalibit"
        ? "#66ffcc"
        : namobj == "Supnin"
        ? "#ffcc99"
        : namobj == "Sorong Kepulauan"
        ? "#99ffcc"
        : namobj == "Sorong Barat"
        ? "#cc99ff"
        : namobj == "Sorong"
        ? "#ff9999"
        : namobj == "Selatsagawin"
        ? "#99ff99"
        : namobj == "Selat Sagawin"
        ? "#fad028"
        : namobj == "Seget"
        ? "#ff6666"
        : namobj == "Salawati Utara"
        ? "#ffcc66"
        : namobj == "Salawati Selatan"
        ? "#66ff66"
        : namobj == "Salawati"
        ? "#6666ff"
        : namobj == "Moisegen"
        ? "#cc66ff"
        : namobj == "Misool Utara"
        ? "#ff66cc"
        : namobj == "Misool Timur"
        ? "#66ccff"
        : namobj == "Misool Selatan"
        ? "#ccff66"
        : namobj == "Misool Barat"
        ? "#ff9966"
        : namobj == "Meosmansar"
        ? "#9966ff"
        : namobj == "Mayamuk"
        ? "#66ffcc"
        : namobj == "Kofiau"
        ? "#ffcc99"
        : namobj == "Kepulauan Sembilan"
        ? "#99ffcc"
        : namobj == "Gebe"
        ? "#cc99ff"
        : namobj == "Ayau"
        ? "#ff9999"
        : namobj == "Aimas"
        ? "#99ff99"
        : "#fad028"; // Default color
}
    </script>
    
</body>
</html>