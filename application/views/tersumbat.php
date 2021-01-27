<div class="slider-area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap pt-100">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: normal;
        position: relative;
        background: #092756;
        background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -moz-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -webkit-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -o-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -ms-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
    }
</style>
<!-- slider Area End-->
<!-- ================ contact section start ================= -->
<main>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <style>
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style2.css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <div class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">


                <center>
                    <h2 style="color: honeydew;">My Map</h2>
                    <h3 style="color: honeydew;">Perumahan di Limbungan Baru</h3><br>
                    <div style="display: grid; justify-content:center; grid-gap:8px; grid-template-columns:repeat(3,auto)">
                        <a href="<?= site_url('home/tersumbat') ?>" class="btn btn-primary">Drainase Tersumbat</a>
                        <a href="<?= site_url('home/kering') ?>" class="btn btn-primary">Drainase Kering</a>
                        <div class="dropdown" id="accountmenu">
                            <but class=" btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" style="width:200px;">Perumahan<b class="caret" aria-haspopup="true" aria-expanded="false"></b></but>
                            <ul class="dropdown-menu" style="background:lightcyan">
                                <li><a href="<?= site_url('home/perumnas') ?>">Perum Perumnas</a></li>
                                <li><a href="<?= site_url('home/griya') ?>">Komplek Griya Lestari</a></li>
                                <li><a href="<?= site_url('home/green') ?>">Perumahan Green House</a></li>
                                <li><a href="<?= site_url('home/permata') ?>">Perumahan Permata Land</a></li>
                            </ul>
                        </div>
                    </div>


                    <script type="text/javascript" src="js/jquery-latest.js"></script>
                    <script type="text/javascript" src="js/bootstrap.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.dropdown-toggle').dropdown();
                        });
                    </script>


                    <br>





                </center>
                <br>
                <!-- Section: Size -->
                <div id="map" class="map"></div>


                <div id="popup" class="ol-popup">
                    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                    <div id="popup-content"></div>
                </div>

                <script type="text/javascript">
                    var vectorLayer = new ol.layer.Vector({
                        source: new ol.source.Vector({
                            format: new ol.format.GeoJSON(),
                            url: '<?php echo base_url() ?>data/tersumbat.json' //url ini digunakan untuk mengambil data banjir yang telah ada digitasi pointnya.
                        }),
                        style: new ol.style.Style({
                            image: new ol.style.Icon(({
                                anchor: [0.5, 46],
                                anchorXUnits: 'fraticon',
                                anchorYUnits: 'pixels',
                                src: '<?php echo base_url() ?>icon/placeholder2.png' //merupakan tampilan gambar petunjuk location
                            }))
                        })
                    });
                    var map = new ol.Map({
                        target: 'map',
                        layers: [
                            new ol.layer.Tile({
                                source: new ol.source.OSM()
                            }), vectorLayer //digunakan untuk menampilkan hasil dari digitasi dan polygonnya
                        ],
                        view: new ol.View({
                            center: ol.proj.fromLonLat([101.438309, 0.510440]), //untuk menentukan titik koordinat awal peta riau
                            zoom: 10 //bisa digunakan untuk menzoom sampai 10 kali
                        })
                    });
                </script>

                <script type="text/javascript">
                    var container = document.getElementById('popup'); //digunakan untuk membuat popup nya
                    content_element = document.getElementById('popup-content'), //disini untuk menampilkan popup
                        closer = document.getElementById('popup-closer'); //dan yang ini untuk menutup kembali popupnya

                    closer.onclick = function() { //untuk tempat titik kliknya
                        overlay.setPosition(undefined); //dan disini penempatan posisinya
                        closer.blur(); //membuat tampilan popup blur
                        return false;
                    };

                    var overlay = new ol.Overlay({ //membuat overlay yang baru
                        element: container,
                        autoPan: true,
                        offset: [0, -10]
                    });

                    map.addOverlay(overlay);
                    var fullscreen = new ol.control.FullScreen(); //untuk menampilkan map dengan layar penuh
                    map.addControl(fullscreen);

                    map.on('click', function(evt) {
                        var feature = map.forEachFeatureAtPixel(evt.pixel,
                            function(feature, layer) {
                                return feature;
                            });
                        if (feature) { // untuk cek feature jalan atau tidak
                            var geometry = feature.getGeometry(); //untuk mendapatkan titik geometri
                            var coord = geometry.getCoordinates(); //untuk mendapatkan titik koordinat

                            var content = '<p>Nama Jalan : ' + feature.get('Nama_Jalan') + '</p>';


                            content_element.innerHTML = content;
                            overlay.setPosition(coord);
                            console.info(feature.getProperties());
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</main>