@extends('template')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <div id="map"></div>

    <!-- Modal Create Point -->
    <div class="modal fade" id="PointModal" tabindex="-1" aria-labelledby="PointModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Titik Penemuan Geosite untuk Geoheritage</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store-point') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill point name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="geom_point" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_point" name="geom" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image_point" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image_point" name="image"
                                onchange="document.getElementById('preview-image-point').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-point" class="img-thumbnail"
                                width="400">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create Polyline-->
    <div class="modal fade" id="PolylineModal" tabindex="-1" aria-labelledby="PolylineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Temuan Geostruktur Patahan/Lipatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store-polyline') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill polyline name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Patahan/Lipatan</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="geom_polyline" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_polyline" name="geom" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image_polyline" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image_polyline" name="image"
                                onchange="document.getElementById('preview-image-polyline').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-polyline" class="img-thumbnail"
                                width="400">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create Polygon-->
    <div class="modal fade" id="PolygonModal" tabindex="-1" aria-labelledby="PolygonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="PolygonModalLabel">Tambah Kawasan Geoheritage Desa Prima</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store-polygon') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Fill polygon name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="geom" class="form-label">Geometry</label>
                            <textarea class="form-control" id="geom_polygon" name="geom" rows="3" readonly></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image_polygon" name="image"
                                onchange="document.getElementById('preview-image-polygon').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mb-3">
                            <img src="" alt="Preview" id="preview-image-polygon" class="img-thumbnail"
                                width="400">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- J Query --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
{{-- Plugin
<script src="assets/plugins/leaflet-search/leaflet-search.js"></script> --}}


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
    <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
    <script>
        // Map
        var map = L.map('map').setView([-7.746994322401961, 110.20857160764909],
        10); // Set the coordinates of UGM and adjust the zoom level


        // Legend
        L.Control.Legend = L.Control.extend({
            onAdd: function(map) {
                var img = L.DomUtil.create("img");
                img.src = "storage/images/legend1.jpg";
                img.style.width = "200px";
                img.style.height = "250px"
                return img;
            },
        });
        L.control.Legend = function(opts) {
            return new L.Control.Legend(opts);
        };

        L.control.Legend({
            position: "bottomleft"
        }).addTo(map);

        // Basemap Asli
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        //Basemap
        var om = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var basemap2 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_satellite/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var basemap3 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        /* Digitize Function */
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

        var drawControl = new L.Control.Draw({
            draw: {
                position: 'topleft',
                polyline: true,
                polygon: true,
                rectangle: true,
                circle: false,
                marker: true,
                circlemarker: false
            },
            edit: false
        });

        map.addControl(drawControl);

        map.on('draw:created', function(e) {
            var type = e.layerType,
                layer = e.layer;

            console.log(type);

            var drawnJSONObject = layer.toGeoJSON();
            var objectGeometry = Terraformer.WKT.convert(drawnJSONObject.geometry);

            console.log(drawnJSONObject);
            console.log(objectGeometry);

            if (type === 'polyline') {
                //Set value geometry to input geom
                $("#geom_polyline").val(objectGeometry);

                //Show modal
                $("#PolylineModal").modal('show');


            } else if (type === 'polygon' || type === 'rectangle') {
                //Set value geometry to input geom
                $("#geom_polygon").val(objectGeometry);

                //Show modal
                $("#PolygonModal").modal('show');

            } else if (type === 'marker') {
                //Set value geometry to input geom
                $("#geom_point").val(objectGeometry);

                //Show modal
                $("#PointModal").modal('show');
            } else {
                console.log('undefined');
            }

            drawnItems.addLayer(layer);
        });

        /* GeoJSON Point */
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent =   "Name : " + feature.properties.name + "</b>" + "<br>" +
                    feature.properties.description + "<br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt=''> " + "<br>" +
                    "<div class='d-flex flex-row mt-3'>" +
                    "<a href='{{ url('edit-point') }}/" + feature.properties.id +
                    "' class='btn btn-sm btn-warning'><i class='fa-solid fa-edit'></i></a>" +
                    "<form action='{{ url('delete-point') }}/" + feature.properties.id + "'method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-danger' onclick='return confirm(Yakin Anda akan menghapus data ini bro?)'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +
                    "</div>";
                layer.on({
                    click: function(e) {
                        layer.bindPopup(popupContent)
                            .openPopup(); // Bind and open the popup on click
                    },
                    mouseover: function(e) {
                        layer.bindTooltip(feature.properties.name)
                            .openTooltip(); // Bind and open the tooltip on mouseover
                    }
                });
            }
        });



        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });

        /* GeoJSON Polyline */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama Geostruktur " + feature.properties.name + "<br>" +
                    "Klaster: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt=''> " + "<br>" +
                    "<div class='d-flex flex-row mt-3'>" +
                    "<a href='{{ url('edit-polyline') }}/" + feature.properties.id +
                    "' class='btn btn-sm btn-warning'><i class='fa-solid fa-edit'></i></a>" +
                    "<form action='{{ url('delete-polyline') }}/" + feature.properties.id + "'method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-danger' onclick='return confirm(Yakin Anda akan menghapus data ini bro?)'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +
                    "</div>";
                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.kab_kota);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });


        /* GeoJSON Polygon */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Name: " + feature.properties.name + "<br>" +
                    "Deskripsi: " + feature.properties.description + "<br>" +
                    "Foto: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "'class='img-thumbnail' alt=''> " + "<br>" +
                    "<div class='d-flex flex-row mt-3'>" +
                    "<a href='{{ url('edit-polygon') }}/" + feature.properties.id +
                    "' class='btn btn-sm btn-warning'><i class='fa-solid fa-edit'></i></a>" +
                    "<form action='{{ url('delete-polygon') }}/" + feature.properties.id + "'method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-danger' onclick='return confirm(Yakin Anda akan menghapus data ini bro?)'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +
                    "</div>";

                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.kab_kota);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        // Function to create popup content
        function createPopupContent(feature) {
            return " Simbol Batuan : " + feature.properties.SIMOBJ + "<br>" +
                " Jenis Formasi:  " + feature.properties.REMARK;
        }

        // Function to style each feature
        function style(feature) {
            return {
                fillColor: getRandomColor(),
                weight: 1,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.5
            };
        }

        // Function to generate random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        /* GeoJSON shp*/
        var polygons = L.geoJson(null, {
            style: style, // Apply the style function here
            onEachFeature: function(feature, layer) {
                var popupContent = createPopupContent(feature);
                layer.on({
                    click: function(e) {
                        layer.bindPopup(popupContent).openPopup(e.latlng);
                    },

                });
            },
        });

        // Load GeoJSON data
        $.getJSON("{{ asset('geologicoba.json') }}", function(data) {
            polygons.addData(data);
            map.addLayer(polygons);
        });


        //layer control
        var overlayMaps = {
            "Pusat Geosite": point,
            "Garis Geostruktur": polyline,
            "Area Geodiversity": polygon,
            "Data Acuan Geologi" : polygons
        };
        var basemap = {
            "OpenStreetMap": om,
            "Esri Imagery": basemap2,
            "Stadia Dark Mode": basemap3,

        };
        var layerControl = L.control.layers(basemap, overlayMaps).addTo(map);



        //     // Plugin Search
        //   var searchControl = new L.Control.Search({
        //     position: "topleft",
        //     layer: layerControl, // Nama variabel layer
        //     propertyName: "REMARK", // Field untuk pencarian
        //     marker: false,
        //     moveToLocation: function (latlng, title, map) {
        //       var zoom = map.getBoundsZoom(latlng.layer.getBounds());
        //       map.setView(latlng, zoom);
        //     },
        //   });

        //   searchControl
        //     .on("search:locationfound", function (e) {
        //       e.layerControl.setStyle({
        //         fillColor: "#ffff00",
        //         color: "#0000ff",
        //       });
        //     })
        //     .on("search:collapse", function (e) {
        //       layerControl.eachLayer(function (layer) {
        //         layerControl.resetStyle(layer);
        //       });
        //     });

        //   map.addControl(searchControl);


        // var layerControl = L.control.layers(null, overlayMaps, {
        //     collapsed: false
        // }).addTo(map);
    </script>
@endsection
