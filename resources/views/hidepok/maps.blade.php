<!DOCTYPE html>
<html>
<head>
<title>Maps</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style type="text/css">
  #map {
        margin-top: 1.5em;
        height: 544px;
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
</style>
</head>
<body>
<!-- Navbar (sit on top) -->

<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button w3-hide-small w3-margin-top"><img src="{{ URL::asset('img/logodsc.png') }}" width="80px"></a>
    <a href="/hidepok/event" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">EVENT</a>
    <a href="/hidepok/blog" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">BLOG</a>
    <a href="/hidepok/maps" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">MAPS</a>
    <a href="/" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">HOME</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
  <a href="/" class="w3-bar-item w3-button" onclick="toggleFunction()">BERANDA</a>
    <a href="/hidepok/maps" class="w3-bar-item w3-button" onclick="toggleFunction()">MAPS</a>
    <a href="/hidepok/blog" class="w3-bar-item w3-button" onclick="toggleFunction()">BLOG</a>
    <a href="/hidepok/event" class="w3-bar-item w3-button" onclick="toggleFunction()">EVENT</a>
  </div>
</div>

<div class="w3-container">
  <div class="w3-dropdown-hover w3-right" style="margin-top: 5%">
    <button class="w3-button w3-black">Find Something</button>
    <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
      <input type="checkbox" value="" id="sm" onclick="mart()">Supermarket</label><br>
      <input type="checkbox" value="" id="tpud" onclick="tpu()">TPU</label>
    </div>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAtFnKBeTAorl8rWoo066pk7pwimSpA-w "></script>
<div id="map"></div>
<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
<script>
// Initialize Firebase
var config = {
  apiKey: "AIzaSyBMMk6zvo74RBODnnOIl0F5EitIxhMZsMY",
  authDomain: "hi-depok2-39129.firebaseapp.com",
  databaseURL: "https://hi-depok2-39129.firebaseio.com",
  projectId: "hi-depok2-39129",
  storageBucket: "hi-depok2-39129.appspot.com",
  messagingSenderId: "657283490375"
};
firebase.initializeApp(config);

var map;
var lp = 1;
var depok = {lat: -6.3878296, lng: 106.6777107};
var walikota_depok = {lat: -6.3950771, lng: 106.8213997};
var depok_zoom = 11;
var walikota_depok_zoom = 15;
var btn = document.getElementById("sm");
var btn2 = document.getElementById("tpud");
var kuliner = firebase.database().ref("Supermarket");
var tpudepok = firebase.database().ref("TPU");
var markers =[];

if(lp==1){
    map = new google.maps.Map(document.getElementById('map'),{
      zoom: walikota_depok_zoom,
      center: walikota_depok
    });
}
function mart(){
  if(btn.checked){
  kuliner.once("value").then(function(snapshot){
    snapshot.forEach(function(childSnapshot){
      var nama = childSnapshot.val().Nama;
      var koordinat = childSnapshot.val().Kordinat;
      var latitude = parseFloat(koordinat.split(',')[0]);
      var longitude = parseFloat(koordinat.split(',')[1]);
      var alamat = childSnapshot.val().Alamat;
      var notelp = childSnapshot.val().NoTelp;
      var jam_operasi = childSnapshot.val().Open;
      var website = childSnapshot.val().website;

      var marker = new google.maps.Marker({
        position: {lat: latitude, lng: longitude},
        map: map,
        nama: nama,
        icon: "{{ asset('img/marker-14.png') }}"
      });
      markers.push(marker);

      var konten = '<div>' +
                  '<h2><b>' + nama + '</b></h2>' +
                  '<p>' + alamat + '</p>' +
                  '<p>' + jam_operasi + '</p>' +
                  '<p>' + notelp + '</p>' +
                  '<p>' + website + '</p>' +
                  ''
                  '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: konten
      });

      marker.addListener('click', function(){
        infowindow.open(map, marker);
      });
    });
  });
}
else {
  for(var i = 0; i < markers.length; i++){
    markers[i].setMap(null);
  }
}
}

function tpu(){
  if(btn2.checked){
  tpudepok.once("value").then(function(snapshot){
    snapshot.forEach(function(childSnapshot){
      var nama = childSnapshot.val().Nama_TPU;
      var koordinat = childSnapshot.val().Kordinat;
      var latitude = parseFloat(koordinat.split(',')[0]);
      var longitude = parseFloat(koordinat.split(',')[1]);
      var alamat = childSnapshot.val().Alamat;

      var marker = new google.maps.Marker({
        position: {lat: latitude, lng: longitude},
        map: map,
        nama: nama,
        icon: "{{ asset('img/marker.png') }}"
      });
      markers.push(marker);

      var konten = '<div>' +
                  '<h2><b>' + nama + '</b></h2>' +
                  '<p>' + alamat + '</p>' +
                  ''
                  '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: konten
      });

      marker.addListener('click', function(){
        infowindow.open(map, marker);
      });
    });
  });
}
else {
  for(var i = 0; i < markers.length; i++){
    markers[i].setMap(null);
  }
}
}

</script>
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
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

</body>
</html>
