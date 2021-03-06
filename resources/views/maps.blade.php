<!DOCTYPE html>
<html>
<head>
<title>Maps | Hi-Depok</title>
<link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  @font-face {
    font-family: "Brandon_Grotesque_bold";
    src: url(../assets/font/Brandon_blk.otf);}

  @font-face {
    font-family: "Brandon_Grotesque_reg";
    src: url(../assets/font/Brandon_reg.otf);}

  .f_bold {
    font-family: "Brandon_Grotesque_bold";
  }

  .f_reg {
    font-family: "Brandon_Grotesque_reg";
  }
  #map {
        position: absolute;
        height: 100%;
        width: 100%;
        background-color: grey;
      }
  .loader,
  .loader:before,
  .loader:after {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: load7 1.8s infinite ease-in-out;
        animation: load7 1.8s infinite ease-in-out;
        }
  .loader {
        color: #FF1000;
        font-size: 10px;
        margin: 80px auto;
        position: relative;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
        }
  .loader:before,
  .loader:after {
        content: '';
        position: absolute;
        top: 0;
        }
  .loader:before {
        left: -3.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
        }
  .loader:after {
        left: 3.5em;
        }
  @-webkit-keyframes load7 {
        0%,
        80%,
        100% {
          box-shadow: 0 2.5em 0 -1.3em;
          }
        40% {
          box-shadow: 0 2.5em 0 0;
          }
        }
  @keyframes load7 {
        0%,
        80%,
        100% {
          box-shadow: 0 2.5em 0 -1.3em;
          }
        40% {
          box-shadow: 0 2.5em 0 0;
          }
        }
  #loadingDiv {
        position:absolute;;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color:#ffffff;
        }
  .w3-check {
    width: 15px;
    height: 18px;
  }
</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-padding-16 w3-border w3-cyan" style="border-radius: 0px 25px 25px 0px;padding-right:2em">
      <img src="{{ URL::asset('img/logoopendata.png') }}" style="width:50px; height:50px;">
    </a>
    <div class="w3-right w3-hide-small w3-display-right" style="margin-right:0.5em;letter-spacing:1px">
      <div class="w3-bar-item">
        <button class="w3-btn w3-circle w3-dark-gray w3-text-white" id="all" onclick="hapus()"><i class="fa fa-refresh w3-hover-opacity"></i></button>
        <button onclick="dropdown()" class="w3-btn w3-circle w3-dark-gray w3-text-white"><i class="fa fa-bars w3-hover-opacity"></i></button>
        <a href="/"><button class="w3-btn w3-circle w3-dark-gray w3-text-white"><i class="fa fa-home w3-hover-opacity"></i></button></a>
      </div>
    </div>
  </div>

  <!-- Data -->
  <div id="dropdown1" class="w3-small w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom" style="margin-left:1em;margin-top:1em; width:450px;height:600px;overflow:auto;white-space: nowrap;">
    <div class="w3-bar">
      <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-heartbeat"></i> Kesehatan </a>
      <div id="Demo1" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <input class="w3-check" type="checkbox" id="ap" onclick="apotik()"> Apotek <br>
        <input class="w3-check" type="checkbox" id="kli" onclick="nik()"> Klinik <br>
        <input class="w3-check" type="checkbox" id="rs" onclick="sakit()"> Rumah Sakit <br>
        <input class="w3-check" type="checkbox" id="pks" onclick="kesmas()"> Puskesmas <br>
        <input class="w3-check" type="checkbox" id="bd" onclick="bid()"> Bidan <br>
      </div>
      <a id="myBtn" onclick="myFunc('Demo2')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-coffee"></i> Perekonomian</a>
      <div id="Demo2" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <input class="w3-check" type="checkbox" id="kl" onclick="klr()"> Kuliner <br>
        <input class="w3-check" type="checkbox" id="ps" onclick="pas()"> Pasar <br>
        <input class="w3-check" type="checkbox" id="sm" onclick="mart()"> Supermarket <br>
        <input class="w3-check" type="checkbox" id="um" onclick="usaha()"> UMKM <br>
      </div>
      <a id="myBtn" onclick="myFunc('Demo3')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-child"></i> Sosial</a>
      <div id="Demo3" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <input class="w3-check" type="checkbox" id="pa" onclick="panti()"> Panti Asuhan <br>
      </div>
      <a id="myBtn" onclick="myFunc('Demo4')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-suitcase"></i> Wisata</a>
      <div id="Demo4" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <input class="w3-check" type="checkbox" id="tp" onclick="tmn()"> Taman Publik <br>
        <input class="w3-check" type="checkbox" id="tw" onclick="wisata()"> Tempat Wisata <br>
      </div>
      <a id="myBtn" onclick="myFunc('Demo5')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-users"></i> Umum</a>
      <div id="Demo5" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <!-- <input class="w3-check" type="checkbox"> PLN <br> -->
        <input class="w3-check" type="checkbox" id="ti" onclick="ibadah()"> Tempat Ibadah <br>
        <!-- <input class="w3-check" type="checkbox"> Pemadam Kebakaran <br> -->
        <!-- <input class="w3-check" type="checkbox" id="pp" onclick="polisi()"> Pos Polisi <br> -->
        <input class="w3-check" type="checkbox" id="pam" onclick="air()"> PDAM (Perusahaan Daerah Air Minum)<br>
        <input class="w3-check" type="checkbox" id="spb" onclick="pom()"> SPBU (Stasiun Pengisian Bahan Bakar Umum)<br>
        <input class="w3-check" type="checkbox" id="man" onclick="makam()"> TPU (Taman Pemakaman Umum) <br>
        <input class="w3-check" type="checkbox" id="or" onclick="raga()"> Olahraga <br>
        <input class="w3-check" type="checkbox" id="ml" onclick="mol()"> Mall <br>
        <input class="w3-check" type="checkbox" id="jp" onclick="kirim()"> Jasa Pengiriman <br>
        <input class="w3-check" type="checkbox" id="kec" onclick="camat()"> Kecamatan <br>
        <input class="w3-check" type="checkbox" id="kel" onclick="klrhn()"> Kelurahan <br>
      </div>
      <a id="myBtn" onclick="myFunc('Demo6')" href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-university"></i> Pendidikan</a>
      <div id="Demo6" class="w3-hide w3-animate-left w3-light-gray" style="padding-bottom:1em; padding-left:2em">
        <input class="w3-check" type="checkbox" id="pt" onclick="kampus()"> Perguruan Tinggi <br>
        <input class="w3-check" type="checkbox" id="sd" onclick="dasar()"> SD (Sekolah Dasar) <br>
        <input class="w3-check" type="checkbox" id="smp" onclick="pertama()"> SMP (Sekolah Menengah Pertama) <br>
        <input class="w3-check" type="checkbox" id="sma" onclick="atas()"> SMA (Sekolah Menengah Atas) <br>
        <input class="w3-check" type="checkbox" id="smk" onclick="kejuruan()"> SMK (Sekolah Menengah Kejuruan) <br>
        <input class="w3-check" type="checkbox" id="pptn" onclick="perpus()"> Perpustakaan <br>
      </div>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/#download" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
    <a href="/maps" class="w3-bar-item w3-button">Maps</a>
    <a href="/blog" class="w3-bar-item w3-button">Blog</a>
    <a href="/event" class="w3-bar-item w3-button">Event</a>
    <a href="/#about" class="w3-bar-item w3-button">About</a>
  </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAtFnKBeTAorl8rWoo066pk7pwimSpA-w "></script>
<div id="map"></div>
<script>
var pdam = <?php print_r(json_encode($pdams)) ?>;
var pasar = <?php print_r(json_encode($pasars)) ?>;
var kuliner = <?php print_r(json_encode($kuliners)) ?>;
var kelurahan = <?php print_r(json_encode($kelurahans)) ?>;
var apotek = <?php print_r(json_encode($apoteks)) ?>;
var klinik = <?php print_r(json_encode($kliniks)) ?>;
var rumah_sakit = <?php print_r(json_encode($rss)) ?>;
var puskesmas = <?php print_r(json_encode($puskesmass)) ?>;
var bidan = <?php print_r(json_encode($bidans)) ?>;
var supermarket = <?php print_r(json_encode($supermarkets)) ?>;
var ukm = <?php print_r(json_encode($ukms)) ?>;
var taman = <?php print_r(json_encode($tamans)) ?>;
var tempatwisata = <?php print_r(json_encode($tempat_wisatas)) ?>;
var tempatibadah = <?php print_r(json_encode($tempat_ibadahs)) ?>;
var spbu = <?php print_r(json_encode($spbus)) ?>;
var tpu = <?php print_r(json_encode($tpus)) ?>;
var olahraga = <?php print_r(json_encode($olahragas)) ?>;
var mall = <?php print_r(json_encode($malls)) ?>;
var pengiriman = <?php print_r(json_encode($jasa_pengirimans)) ?>;
var kecamatan = <?php print_r(json_encode($kecamatans)) ?>;


var map;
var lp = 1;
var depok = {lat: -6.3918638, lng: 106.8023142};
var depok_zoom = 13;

var btn = document.getElementById("pam");
var btn2 = document.getElementById("ps");
var btn3 = document.getElementById("kl");
var btn4 = document.getElementById("kel");
var btn5 = document.getElementById("ap");
var btn6 = document.getElementById("kli");
var btn7 = document.getElementById("rs");
var btn8 = document.getElementById("pks");
var btn9 = document.getElementById("bd");
var btn10 = document.getElementById("sm");
var btn11 = document.getElementById("um");
var btn12 = document.getElementById("tp");
var btn13 = document.getElementById("tw");
var btn14 = document.getElementById("ti");
var btn15 = document.getElementById("spb");
var btn16 = document.getElementById("man");
var btn17 = document.getElementById("or");
var btn18 = document.getElementById("ml");
var btn19 = document.getElementById("jp");
var btn19 = document.getElementById("kec");

// var ilang = document.getElementById("all");

var markers =[];
var markers2 =[];
var markers3 =[];
var markers4 =[];
var markers5 =[];
var markers6 =[];
var markers6 =[];
var markers7 =[];
var markers8 =[];
var markers9 =[];
var markers10 =[];
var markers11 =[];
var markers12 =[];
var markers13 =[];
var markers14 =[];
var markers15 =[];
var markers16 =[];
var markers17 =[];
var markers18 =[];
var markers19 =[];
var markers20 =[];


if(lp==1){
    map = new google.maps.Map(document.getElementById('map'),{
      zoom: depok_zoom,
      center: depok,
      styles : [
        {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#ebe3cd"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#523735"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#f5f1e6"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#c9b2a6"
            }
          ]
        },
        {
          "featureType": "administrative.country",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#dcd2be"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#ae9e90"
            }
          ]
        },
        {
          "featureType": "administrative.locality",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "administrative.neighborhood",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "administrative.province",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "administrative.province",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#ff0000"
            },
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "landscape.natural",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#93817c"
            }
          ]
        },
        {
          "featureType": "poi.attraction",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.business",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.government",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.medical",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#a5b076"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#447530"
            }
          ]
        },
        {
          "featureType": "poi.place_of_worship",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.school",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi.sports_complex",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f5f1e6"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#fdfcf8"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f8c967"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#e9bc62"
            }
          ]
        },
        {
          "featureType": "road.highway.controlled_access",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e98d58"
            }
          ]
        },
        {
          "featureType": "road.highway.controlled_access",
          "elementType": "geometry.stroke",
          "stylers": [
            {
              "color": "#db8555"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#806b63"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#8f7d77"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#ebe3cd"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dfd2ae"
            }
          ]
        },
        {
          "featureType": "transit.station.airport",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "transit.station.bus",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "transit.station.rail",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#b9d3c2"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#92998d"
            }
          ]
        }
      ],
    });
}
  
function air(){
  for(var i = 0; i < pdam.length; i++){
    markers[i] = addMarker(pdam[i]);
  }
   function addMarker(pdam){
    if(btn.checked){
        var nama = pdam.nama_tempat;
        var alamat = pdam.alamat;
        var deskripsi = pdam.gambaran_umum;
        var jamoperasi = pdam.jam_operasional;
        var koordinat = pdam.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);

        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/pdam.png') }}"
              });
        // markers.push(mark);

        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers[i].setMap(null);
    }
  }
}
function pas(){
  for(var i = 0; i < pasar.length; i++){
    markers2[i] = addMarker(pasar[i]);
  }
   function addMarker(pasar){
    if(btn2.checked){
        var nama = pasar.nama_tempat;
        var alamat = pasar.alamat;
        var deskripsi = pasar.gambaran_umum;
        var jamoperasi = pasar.jam_operasional;
        var koordinat = pasar.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/pasar.png') }}"
              });
        // markers2.push(mark);
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers2[i].setMap(null);
    }
  }
}

function klr(){
  for(var i = 0; i < kuliner.length; i++){
    markers3[i] = addMarker(kuliner[i]);
  }
   function addMarker(kuliner){
    if(btn3.checked){
        var nama = kuliner.nama_tempat;
        var alamat = kuliner.alamat;
        var deskripsi = kuliner.gambaran_umum;
        var jamoperasi = kuliner.jam_operasional;
        var telp = kuliner.no_telp;
        var koordinat = kuliner.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/kuliner.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers3[i].setMap(null);
    }
  }
}

function klrhn(){
  for(var i = 0; i < kelurahan.length; i++){
    markers4[i] = addMarker(kelurahan[i]);
  }
   function addMarker(kelurahan){
    if(btn4.checked){
        var nama_kel = kelurahan.kelurahan;
        var alamat = kelurahan.alamat;
        var lurah = kelurahan.lurah;
        var kecamatan = kelurahan.kecamatan;
        var telp = kelurahan.no_telp;
        var koordinat = kelurahan.koordinat;

        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama_kel + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + lurah + '</p>' +
                     '<p>' + kecamatan + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/kelurahan.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers4[i].setMap(null);
    }
  }
}

function apotik(){
  for(var i = 0; i < apotek.length; i++){
    markers5[i] = addMarker(apotek[i]);
  }
   function addMarker(apotek){
    if(btn5.checked){
        var nama = apotek.nama_tempat;
        var alamat = apotek.alamat;
        var deskripsi = apotek.gambaran_umum;
        var jamoperasi = apotek.jam_operasional;
        var telp = apotek.no_telp;
        var koordinat = apotek.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/apotek.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers5[i].setMap(null);
    }
  }
}

function nik(){
  for(var i = 0; i < klinik.length; i++){
    markers6[i] = addMarker(klinik[i]);
  }
   function addMarker(klinik){
    if(btn6.checked){
        var nama = klinik.nama_tempat;
        var alamat = klinik.alamat;
        var deskripsi = klinik.gambaran_umum;
        var jamoperasi = klinik.jam_operasional;
        var telp = klinik.no_telp;
        var koordinat = klinik.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/klinik.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers6[i].setMap(null);
    }
  }
}

function sakit(){
  for(var i = 0; i < rumah_sakit.length; i++){
    markers7[i] = addMarker(rumah_sakit[i]);
  }
   function addMarker(rumah_sakit){
    if(btn7.checked){
        var nama = rumah_sakit.nama_tempat;
        var alamat = rumah_sakit.alamat;
        var deskripsi = rumah_sakit.gambaran_umum;
        var jamoperasi = rumah_sakit.jam_operasional;
        var telp = rumah_sakit.no_telp;
        var koordinat = rumah_sakit.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/rs.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers7[i].setMap(null);
    }
  }
}

function kesmas(){
  for(var i = 0; i < puskesmas.length; i++){
    markers8[i] = addMarker(puskesmas[i]);
  }
   function addMarker(puskesmas){
    if(btn8.checked){
        var nama = puskesmas.nama_tempat;
        var alamat = puskesmas.alamat;
        var deskripsi = puskesmas.gambaran_umum;
        var jamoperasi = puskesmas.jam_operasional;
        var telp = puskesmas.no_telp;
        var koordinat = puskesmas.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/puskesmas.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers8[i].setMap(null);
    }
  }
}

function bid(){
  for(var i = 0; i < bidan.length; i++){
    markers9[i] = addMarker(bidan[i]);
  }
   function addMarker(bidan){
    if(btn9.checked){
        var nama = bidan.nama_tempat;
        var alamat = bidan.alamat;
        var deskripsi = bidan.gambaran_umum;
        var jamoperasi = bidan.jam_operasional;
        var telp = bidan.no_telp;
        var koordinat = bidan.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/bidan.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers9[i].setMap(null);
    }
  }
}

function mart(){
  for(var i = 0; i < supermarket.length; i++){
    markers10[i] = addMarker(supermarket[i]);
  }
   function addMarker(supermarket){
    if(btn10.checked){
        var nama = supermarket.nama_tempat;
        var alamat = supermarket.alamat;
        var deskripsi = supermarket.gambaran_umum;
        var jamoperasi = supermarket.jam_operasional;
        var telp = supermarket.no_telp;
        var web = supermarket.website;
        var koordinat = supermarket.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     '<p>' + web + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/supermarket.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers10[i].setMap(null);
    }
  }
}

function usaha(){
  for(var i = 0; i < ukm.length; i++){
    markers11[i] = addMarker(ukm[i]);
  }
   function addMarker(ukm){
    if(btn11.checked){
        var toko = ukm.nama_ukm;
        var nama = ukm.nama_owner_ukm;
        var alamat = ukm.alamat_ukm;
        var kec = ukm.kecamatan;
        var deskripsi = ukm.diskripsi_ukm;
        var koordinat = ukm.koordinat_ukm;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + toko + '</b></h2>' +
                     '<h4><b>' + nama + '</b></h4>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + kec + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/umkm.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers11[i].setMap(null);
    }
  }
}

function tmn(){
  for(var i = 0; i < taman.length; i++){
    markers12[i] = addMarker(taman[i]);
  }
   function addMarker(taman){
    if(btn12.checked){
        var nama = taman.nama_tempat;
        var alamat = taman.alamat;
        var kec = taman.kecamatan;
        var deskripsi = taman.gambaran_umum;
        var web = taman.website;
        var jamoperasi = taman.jam_operasional;
        var koordinat = taman.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + web + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/taman.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers12[i].setMap(null);
    }
  }
}

function wisata(){
  for(var i = 0; i < tempatwisata.length; i++){
    markers13[i] = addMarker(tempatwisata[i]);
  }
   function addMarker(tempatwisata){
    if(btn13.checked){
        var nama = tempatwisata.nama_tempat;
        var alamat = tempatwisata.alamat;
        var kec = tempatwisata.kecamatan;
        var deskripsi = tempatwisata.gambaran_umum;
        var web = tempatwisata.website;
        var jamoperasi = tempatwisata.jam_operasional;
        var koordinat = tempatwisata.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + web + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/wisata.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers13[i].setMap(null);
    }
  }
}

function ibadah(){
  for(var i = 0; i < tempatibadah.length; i++){
    markers14[i] = addMarker(tempatibadah[i]);
  }
   function addMarker(tempatibadah){
    if(btn14.checked){
        var nama = tempatibadah.nama_tempat;
        var alamat = tempatibadah.alamat;
        var kec = tempatibadah.kecamatan;
        var deskripsi = tempatibadah.gambaran_umum;
        var koordinat = tempatibadah.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/ibadah.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers14[i].setMap(null);
    }
  }
}

function pom(){
  for(var i = 0; i < spbu.length; i++){
    markers15[i] = addMarker(spbu[i]);
  }
   function addMarker(spbu){
    if(btn15.checked){
        var nama = spbu.nama_tempat;
        var alamat = spbu.alamat;
        var kec = spbu.kecamatan;
        var jamoperasi = spbu.jam_operasional;
        var koordinat = spbu.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/spbu.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers15[i].setMap(null);
    }
  }
}

function makam(){
  for(var i = 0; i < tpu.length; i++){
    markers16[i] = addMarker(tpu[i]);
  }
   function addMarker(tpu){
    if(btn16.checked){
        var nama = tpu.nama_tempat;
        var alamat = tpu.alamat;
        var kec = tpu.kecamatan;
        var koordinat = tpu.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/tpu.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers16[i].setMap(null);
    }
  }
}

function raga(){
  for(var i = 0; i < olahraga.length; i++){
    markers17[i] = addMarker(olahraga[i]);
  }
   function addMarker(olahraga){
    if(btn17.checked){
        var nama = olahraga.nama_tempat;
        var alamat = olahraga.alamat;
        var kec = olahraga.kecamatan;
        var deskripsi = olahraga.gambaran_umum;
        var koordinat = olahraga.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + deskripsi + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/gor.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers17[i].setMap(null);
    }
  }
}

function mol(){
  for(var i = 0; i < mall.length; i++){
    markers18[i] = addMarker(mall[i]);
  }
   function addMarker(mall){
    if(btn18.checked){
        var nama = mall.nama_tempat;
        var alamat = mall.alamat;
        var kec = mall.kecamatan;
        var koordinat = mall.koordinat;
        var jamoperasi = mall.jam_operasional;
        var telp = mall.no_telp;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/mall.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers18[i].setMap(null);
    }
  }
}

function kirim(){
  for(var i = 0; i < pengiriman.length; i++){
    markers19[i] = addMarker(pengiriman[i]);
  }
   function addMarker(pengiriman){
    if(btn19.checked){
        var nama = pengiriman.nama_tempat;
        var alamat = pengiriman.alamat;
        var kec = pengiriman.kecamatan;
        var koordinat = pengiriman.koordinat;
        var jamoperasi = pengiriman.jam_operasional;
        var telp = pengiriman.no_telp;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<p>' + alamat + '</p>' +
                     '<p>' + kec + '</p>' +
                     '<p>' + jamoperasi + '</p>' +
                     '<p>' + telp + '</p>' +
                     ''
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/pengiriman.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers19[i].setMap(null);
    }
  }
}

function camat(){
  for(var i = 0; i < kecamatan.length; i++){
    markers20[i] = addMarker(kecamatan[i]);
  }
   function addMarker(kecamatan){
    if(btn19.checked){
        var nama = kecamatan.nama_kecamatan;
        var namcam = kecamatan.nama_camat;
        var alamat = kecamatan.alamat;
        var koordinat = kecamatan.koordinat;
        var latitude = parseFloat(koordinat.split(',')[0]);
        var longitude = parseFloat(koordinat.split(',')[1]);
        var konten = '<div>' +
                     '<h2><b>' + nama + '</b></h2>' +
                     '<h4><b>' + namcam + '</b></h4>' +
                     '<p>' + alamat + '</p>' +
                     '</div>';

        var mark = new google.maps.Marker({
                  map: map,
                  position: {lat: latitude, lng: longitude},
                  icon: "{{ asset('img/marker/kecamatan.png') }}"
              });
                
        var infoWindow = new google.maps.InfoWindow;
        google.maps.event.addListener(mark, 'click', function(){
          infoWindow.setContent(konten);
          infoWindow.open(map, mark);
        });

        return mark;
    }
    else{
      markers20[i].setMap(null);
    }
  }
}


// function hapus(){
//   if(ilang.click){
//     markers, markers2, markers3, markers4, markers5, markers6, markers7.setMap(null);
//   }
// }

</script>
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        // navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
//script untuk page loading
$('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
setTimeout(removeLoader, 500); //wait for page load PLUS two seconds.
});
function removeLoader(){
$( "#loadingDiv" ).fadeOut(500, function() {
// fadeOut complete. Remove the loading div
$( "#loadingDiv" ).remove(); //makes page more lightweight
});
}
</script>
<script>
function dropdown() {
    var x = document.getElementById("dropdown1");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
var openInbox = document.getElementById("myBtn");
openInbox.click();

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-border-bottom";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-border-bottom", "");
    }
}
</script>

</body>
</html>


