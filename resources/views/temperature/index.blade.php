<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title>TIC | Dashboard</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.tic.go.tz/site/images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.tic.go.tz/site/images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.tic.go.tz/site/images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.tic.go.tz/site/images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.tic.go.tz/site/images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.tic.go.tz/site/images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.tic.go.tz/site/images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.tic.go.tz/site/images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.tic.go.tz/site/images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.tic.go.tz/site/images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.tic.go.tz/site/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.tic.go.tz/site/images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.tic.go.tz/site/images/icon/favicon-16x16.png">


    <link href="{{ asset('admin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/vendor/nouislider/nouislider.min.css') }}">
    <!-- Style css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v9.2.4/ol.css">

    <script src="https://cdn.jsdelivr.net/npm/@turf/turf"></script>

    <style>
        #map {
            width: 100%;
            height: 900px;
        }

        .legend {
            position: absolute;
            bottom: 50px;
            left: 1300px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-size: 14px;
            z-index: 1000;
        }

        .legend-item {
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .legend-item span {
            display: inline-block;
            width: 20px;
            height: 10px;
            margin-right: 5px;
            border-radius: 2px;
        }



        .map-button2 {
            position: absolute;
            top: 15px;
            left: 1300px;
            z-index: 1000;
            padding: 10px 20px;
            background-color: #37517E;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .map-button:hover {
            background-color: #FFFF;
            color: #37517E;
        }
    </style>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">



        @include('includes/header')

        <!--**********************************
            Sidebar start
        ***********************************-->


        @include('includes.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <!-- <div class="col-xl-3">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Search Area for Investment Areas</h4>
                                        </div>
                                        <div class="card-body">

                                            <form>
                                                <li class="nav-item d-flex align-items-center">
                                                    <div class="input-group search-area input-primary">
                                                        <input type="text" class="form-control" placeholder="Search here...">
                                                        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2 text-light"></i></a></span>
                                                    </div>
                                                </li>

                                            </form>

                                            <div class="m-5"></div>

                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ asset('/admin/images/pwani1.jpeg') }}" alt="Card image cap">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Kibaha</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">Kibaha is a town in Tanzania, serving as the administrative capital of the Pwani Region with the postal code 61100. Since gaining its own municipality, it has been designated as Kibaha Urban District, distinct from Kibaha Rural District.
                                                            During the census conducted in 2012, the area of Kibaha Town had a population of approximately 128,488 residents. In the 2022 census, the population was recorded at 265,360.
                                                            Kibaha Urban District covers an area divided into 11 wards.</p>
                                                        <p class="card-text text-dark">Last updated 3 mins ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="card">
                                                    <img class="card-img-top img-fluid" src="{{ asset('/admin/images/pwani3.jpg') }}" alt="Card image cap">
                                                    <div class="card-header">
                                                        <h5 class="card-title">Mkuranga</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">Mkuranga is a small town and the administrative headquarters of Mkuranga District in the Pwani Region of Tanzania, with the postal code 61501.
                                                            In the 2022 census, the population of the ward was recorded at 46,867 residents. During the 2012 census, the ward had approximately 25,847 residents.
                                                        </p>

                                                        <p class="card-text text-dark">Last updated 3 mins ago</p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <div class="col-xl-12">
                                <div class="map-container">
                                    <button class="map-button2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">View Graph</button>
                                    <div id="map"></div>

                                    <div id="legend" class="legend">
                                        <div class="legend-item"><span style="background-color: #ff0000;"></span> Above 30°C</div>
                                        <div class="legend-item"><span style="background-color: #ff9900;"></span> 25°C - 30°C</div>
                                        <div class="legend-item"><span style="background-color: #ffff00;"></span> 20°C - 25°C</div>
                                        <div class="legend-item"><span style="background-color: #00ff00;"></span> 15°C - 20°C</div>
                                        <div class="legend-item"><span style="background-color: #0000ff;"></span> Below 15°C</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-----********* Model for adding sites8888************--->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">

                            <img src="{{ asset('admin/images/dash/rain.jpg') }}" style="width: 750px;" alt="">

                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-------*******Model for adding sites ends here*******-->

        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="javscript::void()" target="_blank">Moechiwa</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <!-- <script>
        var map = L.map('map').setView([-6.792354, 39.208328], 10);

        // Base layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
        }).addTo(map);

        // Temperature layer
        var tempLayer = L.tileLayer('https://tile.openweathermap.org/map/temp_new/{z}/{x}/{y}.png?appid=efaed6cf43966a6c0fe72cc946a31f89', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.openweathermap.org">OpenWeatherMap</a>'
        });



        // Adding both layers to the map
        tempLayer.addTo(map);
        rainLayer.addTo(map);

        // Layer control
        var baseMaps = {
            "OpenStreetMap": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
        };

        var overlayMaps = {
            "Temperature": tempLayer,
            "Rainfall": rainLayer
        };

        L.control.layers(baseMaps, overlayMaps, {
            collapsed: false
        }).addTo(map);



    </script> -->



    <!-- OpenLayers Maps -->
    <script src="https://cdn.jsdelivr.net/npm/ol@v9.2.4/dist/ol.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mapView = new ol.View({
                center: ol.proj.fromLonLat([39.208328, -6.792354]),
                zoom: 10,
            });

            var map = new ol.Map({
                target: 'map',
                view: mapView,
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM()
                    })
                ]
            });

            var plotOneTile = new ol.layer.Tile({
                title: "Plot One",
                source: new ol.source.TileWMS({
                    url: 'http://localhost:8080/geoserver/TIC/wms?service=WMS',
                    params: {
                        'LAYERS': 'TIC:PLOT ONE',
                        'TILED': true
                    },
                    serverType: 'geoserver',
                    visible: true
                })
            });
            map.addLayer(plotOneTile);

            var plotTwoTile = new ol.layer.Tile({
                title: "Plot Two",
                source: new ol.source.TileWMS({
                    url: 'http://localhost:8080/geoserver/TIC/wms?service=WMS',
                    params: {
                        'LAYERS': 'TIC:PLOT TWO',
                        'TILED': true
                    },
                    serverType: 'geoserver',
                    visible: true
                })
            });
            map.addLayer(plotTwoTile);

            var plotThreeTile = new ol.layer.Tile({
                title: "Plot Three",
                source: new ol.source.TileWMS({
                    url: 'http://localhost:8080/geoserver/TIC/wms?service=WMS',
                    params: {
                        'LAYERS': 'TIC:PLOT THREE',
                        'TILED': true
                    },
                    serverType: 'geoserver',
                    visible: true
                })
            });
            map.addLayer(plotThreeTile);

            var plotFourTile = new ol.layer.Tile({
                title: "Plot Four",
                source: new ol.source.TileWMS({
                    url: 'http://localhost:8080/geoserver/TIC/wms?service=WMS',
                    params: {
                        'LAYERS': 'TIC:PLOT FOUR',
                        'TILED': true
                    },
                    serverType: 'geoserver',
                    visible: true
                })
            });
            map.addLayer(plotFourTile);

            var plotFiveTile = new ol.layer.Tile({
                title: "Plot Five",
                source: new ol.source.TileWMS({
                    url: 'http://localhost:8080/geoserver/TIC/wms?service=WMS',
                    params: {
                        'LAYERS': 'TIC:PLOT FIVE',
                        'TILED': true
                    },
                    serverType: 'geoserver',
                    visible: true
                })
            });
            map.addLayer(plotFiveTile);

            // Representative coordinates for each plot
            var plotOneCoord = ol.proj.fromLonLat([39.0317, -6.9094]);
            var plotTwoCoord = ol.proj.fromLonLat([38.7688, -6.4213]);
            var plotThreeCoord = ol.proj.fromLonLat([39.2336, -7.1778]);
            var plotFourCoord = ol.proj.fromLonLat([39.0311, -6.911]);
            var plotFiveCoord = ol.proj.fromLonLat([38.7174, -6.788]);



            // Function to create marker
            function createMarker(coordinate) {
                return new ol.layer.Vector({
                    source: new ol.source.Vector({
                        features: [new ol.Feature({
                            geometry: new ol.geom.Point(coordinate)
                        })]
                    }),
                    style: new ol.style.Style({
                        image: new ol.style.Icon({
                            anchor: [0.5, 1],
                            src: 'https://openlayers.org/en/latest/examples/data/icon.png'
                        })
                    })
                });
            }

            // Add markers to map
            map.addLayer(createMarker(plotOneCoord));
            map.addLayer(createMarker(plotTwoCoord));
            map.addLayer(createMarker(plotThreeCoord));
            map.addLayer(createMarker(plotFourCoord));
            map.addLayer(createMarker(plotFiveCoord));


            // Adding a global temperature layer (example using OpenWeatherMap tiles)
            var temperatureLayer = new ol.layer.Tile({
                source: new ol.source.XYZ({
                    url: 'https://tile.openweathermap.org/map/temp_new/{z}/{x}/{y}.png?appid=efaed6cf43966a6c0fe72cc946a31f89',
                    attributions: 'Temperature data &copy; <a href="https://openweathermap.org">OpenWeatherMap</a>',
                    maxZoom: 9, // Adjust the maxZoom as needed
                    minZoom: 0 // Adjust the minZoom as needed
                })
            });
            map.addLayer(temperatureLayer);

            // Add legend control
            var legendControl = document.getElementById('legend');
            map.getViewport().appendChild(legendControl);

            // Adjust the legend position when map is resized
            map.on('change:size', function() {
                var mapSize = map.getSize();
                legendControl.style.right = (mapSize[0] - 10) + 'px';
            });

        });
    </script>


    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('admin/vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('admin/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>

</body>

</html>