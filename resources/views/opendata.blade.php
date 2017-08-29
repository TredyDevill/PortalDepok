<!DOCTYPE html>
<html>
<title>Depok Open Data</title>
<link rel="shortcut icon" href="{{URL::asset('/img/logoopendata.png')}}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1{
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/bg1.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("img/bg2.jpg");
  min-height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("images/bg.png");
    min-height: 400px;
}
.label_header {
  display: block;
  text-align: center!important;
  letter-spacing: 10px;
    font-size: 55px;
}
.see_more {
  color: #fff!important;
    background-color: #000!important;
    float: right!important;
    margin-top: 16px!important;
    margin-bottom: 16px!important;
    border: none;
    display: inline-block;
    outline: 0;
    letter-spacing: 3px;
    padding: 0.7em 2.5em;
    vertical-align: middle;
    overflow: hidden;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
.flarge {
  font-size: 40pt;
  text-align: right;
}
.w3-bar {
    padding: 1em 2em;
 }
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
.w3-white, .w3-hover-white:hover {
    color: #575f8a!important;
    background-color: #fff!important;
}
/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.w3-bar .w3-bar-item {
    padding: 8px 26px;
}
@media only screen and (max-width: 800px) {
    .label_header {
    letter-spacing: 5px;
      font-size: 20px;
  }
  .see_more {
      padding: 0.2em 1.8em;
      font-size: 12px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <div class="w3-bar-item" style="padding:0em">
      <img src="{{URL::asset('/img/logoopendata.png')}}" class="w3-circle" alt="Norway" style="width:50px">
      {{-- <img src="images/logoopendata.png" class="w3-circle" alt="Norway" style="width:50px"> --}}
    </div>
    <div class="w3-bar-item w3-text-white" style="letter-spacing: 3px; font-size:15pt;padding:8px 12px;"><b>OPEN DATA</b></div>
    <div class="w3-right w3-hide-small" style="color:#575f8a">
      <a href="/data" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Data</a>
      <a href="/topik" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Topik</a>
      <a href="/tentang" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Tentang</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/data" class="w3-bar-item w3-button" onclick="toggleFunction()">Data</a>
    <a href="/topik" class="w3-bar-item w3-button">Topik</a>
    <a href="/tentang" class="w3-bar-item w3-button">Tentang</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-right" style="white-space:nowrap; text-align:right; padding-right: 5em;">
    <h1 class="w3-text-blue-gray" style="text-shadow:1px 1px 0 #444; font-size:50px; letter-spacing:5px;">
    <b class="w3-animate-top">DEPOK <br> OPEN DATA</b></h1>
    <p class="w3-animate-zoom">Temukan Data Seluruh Unit Kerja Pemerintah dan Seluruh Instansi atau <br> Organisasi Kota Depok </p>
  </div>
  </div>
</div>

<div class=" bgimg-2 w3-container w3-padding-64" id="about">
  <div class="w3-row w3-content w3-padding-64">
    <div class="w3-col m6 w3-center">
      <img src="{{URL::asset('/img/first-01.png')}}" class="w3-round w3-image" alt="Open Data" width="300" height="300">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-small w3-padding-64">
      <h3><b>Apa itu Depok Open Data?</b></h3>
      <p style="font-size:12pt">
        Merupakan Portal Data Terpadu Pemerintah Kota Depok yang menyajikan data-data dari seluruh Unit Kerja di Pemerintah dan Seluruh Instansi serta Organisasi Kota Depok.
      </p>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-row w3-center w3-padding-32" id="contact" style="background-color:#575f8a">
  <h3 class="w3-center w3-text-white">Temukan Data Disini<br><i class="w3-text-white fa fa-caret-down"></i></h3>
  <form class="w3-container w3-content" action="/action_page.php">
    <input class="w3-input w3-center w3-border " name="last" type="text" placeholder="Cari Data, Instansi, Organisasi, ..."></p>
    <button class="w3-btn w3-text-black w3-round-large w3-padding-large" style="background-color: #f1e99d!important;">Cari Data</button></p>
  </form>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<!-- <div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">FEATURE</span>
  </div>
</div> -->

<!-- Work Section -->
<div class="w3-container w3-padding-48" id="work">
  <h3 class="w3-center">TOPIK</h3>
  <p class="w3-center w3-large">Mengenai Unit Kerja Pemerintah dan Instansi serta Organisasi Kota Depok</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <a href="/topik/pendidikan">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/pendidikan.png')}}" style="width:100%" alt="Kesehatan">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PENDIDIKAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/kesehatan">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/kesehatan.png')}}" style="width:100%" alt="Pendidikan">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">KESEHATAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/perekonomian">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/keuangan.png')}}" style="width:100%" alt="Pariwisata">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PEREKONOMIAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/fasilitasumum">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/fasilitasumum.png')}}" style="width:100%" alt="Keuangan">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">FASILITAS UMUM</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <a href="/topik/transportasi">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/transportasi.png')}}" style="width:100%" alt="Bencana">
          <div class="w3-display-right w3-display-hover" style="top: 30%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">TRANSPORTASI</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/sosial">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/sosial.png')}}" style="width:100%" alt="Kependudukan">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">SOSIAL</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/pariwisata">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/pariwisata.png')}}" style="width:100%">
          <div class="w3-display-right w3-display-hover" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PARIWISATA</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/topik/olahraga">
        <div class="w3-display-container w3-hover-opacity">
          <img src="{{URL::asset('/img/olahraga.png')}}" style="width:100%" alt="Bencana">
          <div class="w3-display-right w3-display-hover" style="top: 30%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">OLAHRAGA</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  </div>
</div>

  <div class="w3-row-padding w3-section w3-center">
    <a href="/topik">
      <button class="w3-btn w3-text-white w3-round-large w3-padding-large" style="background-color:#575f8a">Selengkapnya</button>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<!-- The Band Section -->
<div class="w3-container w3-center w3-text-white w3-padding-64" style="background-color:#575f8a">
  <h3 style="w3-content">DATA TERBARU</h3><br>
  <div class="w3-content w3-left-align">
    <h6 style="color:#f1e99d; margin:0px"><b>Data Jadwal Pengawasan Kinerja SKPD</b></h6>
    <p class="w3-justify">Dataset ini berisi jadwal pengawasan kinerja SKPD/UKPD di Provinsi DKI Jakarta. Data ini terdiri dari: Satuan kerja perangkat daerah Bulan evaluasi...</p>
    <!-- ini jg di edit untuk nge-linknya, yg di bawahnya jg-->
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <hr style="border-top: 1px solid rgba(238, 238, 238, 0.16);">
    <h6 style="color:#f1e99d; margin:0px"><b>Data Usaha Jasa Akomodasi Hotel Bintang</b></h6>
    <p class="w3-justify">Dataset ini merupakan kumpulan daftar nama hotel berbintang dan hotel non bintang yang ada di DKI Jakarta. data mencakup: nama usaha = nama hotel alamat...</p>
    <a href="/detailp">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <hr style="border-top: 1px solid rgba(238, 238, 238, 0.16);">
    <h6 style="color:#f1e99d; margin:0px"><b>Data Kunjungan Wisatawan Nusantara ke Destinasi Wisata</b></h6>
    <p class="w3-justify">Data ini berisi mengenai jumlah wisatawan nusantara ke destinasi wisata di DKI Jakarta. Penjelasan mengenai Variabel pada Dataset ini: tahun nama_provinsi...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>
  </div>
</div>

<div class="w3-center" id="contact" style="background-color:#575f8a">
  <img src="{{URL::asset('/img/down-01.png')}}" width="50%">
</div>

<div class="w3-row w3-center" style="background-color: #f1e99d!important;">
  <div class="w3-content" style="max-width:800px;">
    <div class="w3-quarter w3-section">
    <img src="{{URL::asset('/img/logodpk.png')}}" width="200px" height="75px" style="padding-top:1.5em">
    </div>
  <div class="w3-quarter w3-section">
    <img src="{{URL::asset('/img/logodsc.png')}}" width="180px" height="100px">
  </div>
  <div class="w3-quarter w3-section">
    <img src="{{URL::asset('/img/logohidepok.png')}}" width="100px" height="100px">
  </div>
  <div class="w3-quarter w3-section">
    <img src="{{URL::asset('/img/logodepoktik.png')}}" width="160px" height="85px" style="padding-top:1em">
  </div>
  </div>
</div>

<!-- w3-hover-opacity-off -->
<!-- Footer -->
<footer class="w3-center w3-light-gray w3-padding w3-text-dark-gray">
  <div class="w3-row">
    <div class="w3-third w3-container">
      <div class="w3-xlarge w3-section" style="letter-spacing:8px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
      </div>
    </div>
    <div class="w3-third w3-container">
      <h3 style="letter-spacing:3px">DEPOK OPEN DATA</h3>
    </div>
    <div class="w3-third w3-container" style="padding:21px">
      <a href="/data" class="w3-bar-item w3-hover-text-blue" style="text-decoration:none" onclick="toggleFunction()">Data</a>
      <a href="/topik" class="w3-bar-item w3-hover-text-blue" style="text-decoration:none;padding: 0em 1.7em;" onclick="toggleFunction()">Topik</a>
      <a href="/tentang" class="w3-bar-item w3-hover-text-blue" style="text-decoration:none">Tentang</a>
    </div>
  </div>
  <hr style="margin: 0em 6em;border-top: 1px solid rgba(173, 171, 171, 0.35);">
  <div class="w3-row w3-small w3-padding">
    <div class="w3-content" style="max-width:700px">
      <div class="w3-third w3-container">
        <h5>MAIL</h5>
        <p>humas@hidepok.id</p>
      </div>
      <div class="w3-third w3-container">
        <h5>CALL</h5>
        <p>+62 811 222 333 11</p>
      </div>
      <div class="w3-third w3-container">
        <h5>FIND US</h5>
        <p>Jalan Margonda No.54, Depok</p>
      </div>
    </div>
  </div>
  <hr style="margin: 0em 6em; border-top: 1px solid rgba(173, 171, 171, 0.35);">
  <p>Supported by TiregDev © 2017</p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

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
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
