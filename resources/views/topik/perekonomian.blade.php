@extends('layouts.topik')

<title>Perekonomian</title>

@section('content')
  <!-- Header -->
  <div class="w3-container paddingtop" id="showcase">
    <h2><b>Topik - Perekonomian</b></h2>
  </div>

  <!-- Navigasi -->
  <div class="w3-row-padding">
  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'KD');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'AT');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Aktivitas Terbaru</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'SD');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Sering Diunduh</div>
    </a>
  </div>

  <!-- Navigasi Kumpulan Data -->
  <div id="KD" class="w3-container city w3-medium">
    <br>
    <div class="w3-container w3-right">
      <input class="search w3-border" type="text" placeholder="Search...">
    </div>
    <form class="w3-container w3-right" action="">
      <select class="w3-select" name="option" style="width:200px">
        <option value="" disabled selected>Order by</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <button class="w3-btn blue w3-text-white">Go</button>
    </form>
    <h4 id="datattl" style="color:#575f8a; margin:6px"></h4><br><br>
    
    <!-- Isi Data -->
    <ul class="list">
    <li>
      <h6 class="name" id="data" style="margin:0px"><b>Data Mall</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi terkait Mall yang ada di Depok, seperti : Nama, No telp, Alamat, dan Koordinat</p>
      <a href="/detail/Mall">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data2" style="margin:0px"><b>Data Pasar</b></h6>
      <p class="w3-justify">Data ini berisi informasi terkait Pasar yang ada di Depok, seperti : Nama, No telp, Alamat, Deskripsi, Jam Operasional dan Koordinat</p>
      <a href="/detail/Pasar">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data3" style="margin:0px"><b>Data Supermarket</b></h6>
      <p class="w3-justify">Data ini berisikan mengenai informasi supermarket yang ada di Depok, seperti : Nama, No telp, Alamat, Jam Operasional, Website dan Koordinat</p>
      <a href="/detail/Supermarket">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>
    </ul>

 <!-- Pagination -->
    <br>
    <div class="w3-center">
      <div class="w3-bar">
      <ul class="pagination"></ul>
      </div>
    </div>
  <script type="text/javascript">
    var options = { 
      valueNames: [ 'name' ],
      page: 3,
      pagination: true
    };
    var userList = new List('KD', options);
  </script>
  </div>
  <!-- Navigasi Kumpulan Data (finish) -->

  <!-- Navigasi Aktifitas Terbaru -->
  <div id="AT" class="w3-container city w3-medium" style="display:none">
    <br>
    <div class="w3-container w3-right">
      <input class="w3-input w3-border" type="text" placeholder="Search...">
    </div>
    <form class="w3-container w3-right" action="">
      <select class="w3-select" name="option" style="width:200px">
        <option value="" disabled selected>Order by</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <button class="w3-btn blue w3-text-white">Go</button>
    </form>
    <h4 style="color:#575f8a; margin:6px"><b>40 Data Ditemukan</b></h4><br><br>
    <!-- Isi Data -->
    <ul class="w3-ul">
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
      <li>
        <img src="../../img/icon-kes.png" class="w3-circle w3-margin-right" style="width:30px"> <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Soraya</a>  updated the dataset <a class="w3-text-blue-gray w3-hover-text-blue" href="#" style="text-decoration:none">Data Jamaah Haji Meninggal Dunia Asal Kota Depok</a>
      </li>
    </ul>

    <!-- Pagination -->
    <br><br><br>
    <div class="w3-center">
      <div class="w3-bar">
        <a href="#" class="w3-button">&laquo;</a>
        <a href="#" class="w3-button w3-gray">1</a>
        <a href="#" class="w3-button">2</a>
        <a href="#" class="w3-button">3</a>
        <a href="#" class="w3-button">4</a>
        <a href="#" class="w3-button">&raquo;</a>
      </div>
    </div>
  </div>
  <!-- Navigasi Aktifitas Terbaru (finish) -->

  <!-- Navigasi Sering Diunduh -->
  <div id="SD" class="w3-container city w3-medium" style="display:none">
    <br>
    <div class="w3-container w3-right">
      <input class="w3-input w3-border" type="text" placeholder="Search...">
    </div>
    <form class="w3-container w3-right" action="">
      <select class="w3-select" name="option" style="width:200px">
        <option value="" disabled selected>Order by</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>
      <button class="w3-btn blue w3-text-white">Go</button>
    </form>
    <h4 style="color:#575f8a; margin:6px"><b>40 Data Ditemukan</b></h4><br><br>
    <!-- Data yang Sering Diunduh -->
    <div class="w3-container w3-padding-16">
      <div class="w3-row">
        <div class="w3-third w3-container">
          <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
        <div class="w3-third w3-container">
           <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
        <div class="w3-third w3-container">
          <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
      </div>
    </div>
    <div class="w3-container w3-padding-16">
      <div class="w3-row">
        <div class="w3-third w3-container">
          <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
        <div class="w3-third w3-container">
           <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
        <div class="w3-third w3-container">
          <div class="w3-card-4" style="width:100%">
            <header class="w3-container w3-light-grey">
              <h4>Data Sekolah Rawan Banjir</h4>
            </header>
            <div class="w3-container">
              <p>Dataset ini berisi daftar Sekolah Rawan Banjir Provinsi DKI Jakarta variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan....</p>
            </div>
            <button class="w3-button w3-block w3-dark-grey">CSV</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Navigasi Sering Diunduh (finish) -->

  <!-- Modal for full size img on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Supported by TiregDev © 2017</p></div>

<script>
var datattl = document.getElementById("datattl");
var total = 0;
function jmlh() {
  total++;
  datattl.innerHTML=total + " Data Perekonomian";
}

var mall = document.getElementById("data");
var mallref = firebase.database().ref("Mall");
var jmlhmall = 0;
mallref.on("value", function(snapshot){
  snapshot.forEach(function(mall2){
    jmlhmall++;
    jmlh();
  });
});

var psr = document.getElementById("data2");
var psrref = firebase.database().ref("Pasar");
var jmlhpsr = 0;
psrref.on("value", function(snapshot2){
  snapshot2.forEach(function(psr2){
    jmlhpsr++;
    jmlh();
  });
});

var spr = document.getElementById("data3");
var sprref = firebase.database().ref("Supermarket");
var jmlhspr = 0;
sprref.on("value", function(snapshot3){
  snapshot3.forEach(function(spr3){
    jmlhpsr++;
    jmlh();
  });
});
</script>
@endsection
  <!-- Tabs -->
  <script>
  function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-black", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-black";
  }
  </script>

  <script>
  // Script to open and close sidebar
  function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
  }

  function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
  }

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
  </script>
