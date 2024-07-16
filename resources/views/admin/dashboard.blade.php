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

                        @if(Auth::user()->role == 1)
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card tryal-gradient">
                                            <div class="card-body tryal row">
                                                <div class="col-xl-7 col-sm-6">
                                                    <h2>Manage potential investment areas in one touch</h2>
                                                    <span> By providing better solutions, though appropiate decisions</span>
                                                    <a href="{{ route('potentialarea.index') }}" class="btn btn-rounded  fs-18 font-w500">View Potential Areas</a>
                                                </div>
                                                <div class="col-xl-5 col-sm-6">
                                                    <img src="images/chart.png" alt="" class="sd-shape">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 pb-0">
                                                <h4 class="fs-20 font-w700 mb-0">Investiment Analytics</h4>
                                                <div class="dropdown ">
                                                    <div class="btn-link" data-bs-toggle="dropdown">
                                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
                                                            </circle>
                                                            <circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
                                                            </circle>
                                                            <circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
                                                            </circle>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div id="revenueMap" class="revenueMap"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body d-flex px-4  justify-content-between">
                                                        <div>
                                                            <div class="">
                                                                <h2 class="fs-32 font-w700">5</h2>
                                                                <span class="fs-18 font-w500 d-block">Potential Areas</span>
                                                                <span class="d-block fs-16 font-w400"><small class="text-danger">2%</small> than last
                                                                    year</span>
                                                            </div>
                                                        </div>
                                                        <div id="NewCustomers"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body d-flex px-4  justify-content-between">
                                                        <div>
                                                            <div class="">
                                                                @php
                                                                $userCount = \App\Models\User::where('role', '!=', 1)->count();
                                                                $userCount = $userCount ?? 0;
                                                                @endphp

                                                                <h2 class="fs-32 font-w700">{{ $userCount }}</h2>
                                                                <span class="fs-18 font-w500 d-block">Investors</span>
                                                                <span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last
                                                                    month</span>
                                                            </div>
                                                        </div>
                                                        <div id="NewCustomers1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card">

                                            <div class="card-body px-2">
                                                <div id="map" style="border:0; width: 100%; height: 465px; border-radius: 10px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="card">

                                            <div class="card-body">
                                                <!-- <div class="d-flex justify-content-between align-items-center flex-wrap">

                                                </div> -->
                                                <div class="tab-content">
                                                    <!-- <div class="image-box active"> -->
                                                    <img src="{{ asset('admin/images/dash/temp.jpg') }}" alt="">
                                                    <!-- </div> -->
                                                </div>
                                                <!-- <div class="d-flex align-items-center">

                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card">

                                            <div class="card-body">
                                                <!-- <div class="d-flex justify-content-between align-items-center flex-wrap">

                                                </div> -->
                                                <div class="tab-content">
                                                    <h3>Over View</h3>
                                                </div>
                                                <!-- <div class="d-flex align-items-center">

                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-9">
                                        <div class="card">

                                            <div class="card-body">
                                                <!-- <div class="d-flex justify-content-between align-items-center flex-wrap">

                                                </div> -->
                                                <div class="tab-content">
                                                    <!-- <div class="image-box active"> -->
                                                    <img src="{{ asset('admin/images/dash/rain.jpg') }}" alt="">
                                                    <!-- </div> -->
                                                </div>
                                                <!-- <div class="d-flex align-items-center">

                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card">

                                            <div class="card-body">
                                                <!-- <div class="d-flex justify-content-between align-items-center flex-wrap">

                                                </div> -->
                                                <div class="tab-content">
                                                    <h3>Over View</h3>
                                                </div>
                                                <!-- <div class="d-flex align-items-center">

                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-xl-3">
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

                            </div>

                            <!-- <div class="col-xl-9">
                                <div class="map-container">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63818.01992292574!2d39.208328!3d-6.792354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c9e7e2a15c5%3A0x73b6ef4d6e55b937!2sDar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1621599511007!5m2!1sen!2sus&z=4" frameborder="0" style="border:0; width: 100%; height: 900px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>

                                </div>
                            </div> -->

                            <div class="col-xl-9">
                                <div class="map-container">
                                    <!-- <button class="map-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Add Sites</button> -->
                                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63818.01992292574!2d39.208328!3d-6.792354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c9e7e2a15c5%3A0x73b6ef4d6e55b937!2sDar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1621599511007!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 900px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                                    <div id="map" style="border:0; width: 100%; height: 900px;"></div>
                                </div>
                            </div>

                        </div>

                        @endif
                    </div>
                </div>
            </div>
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

    <!-- OpenLayers Maps -->
    <script src="https://cdn.jsdelivr.net/npm/ol@v9.2.4/dist/ol.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mapView = new ol.View({
                center: ol.proj.fromLonLat([39.208328, -6.792354]),
                zoom: 8,
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