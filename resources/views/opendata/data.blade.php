@extends('layouts.app')

<title>Data</title>

@section('content')
  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-text-white w3-top w3-medium w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#575f8a" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:12px"><i class="fa fa-close"></i>Close Menu</a>
  <div class="w3-container">
    <a href="/opendata"><img src="../img/logoopendatafull.png" alt="Depok Open Data" style="width:200px"></a>
  </div><br>
  <div class="w3-bar-block">
    <a href="/opendata" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href="/data" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-gray">Data</a>
    <a href="/topik" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Topik</a>
    <a href="/tentang" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tentang</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-text-white w3-xlarge w3-padding" style="background-color:#575f8a">
  <a href="javascript:void(0)" class="w3-button w3-margin-right w3-medium" onclick="w3_open()" style="background-color:#575f8a">☰</a>
  <img class="w3-display-middle" src="../../img/logoopendatafull.png" alt="Norway" style="width: 110px;height: 40px;">
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <div class="w3-container paddingtop" id="showcase">
    <h2><b>Data</b></h2>
  </div>

  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'users');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'AT');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Aktivitas Terbaru</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'SD');">
      <div class="w3-third tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Sering Diunduh</div>
    </a>
  </div>

  <!-- Isi Data -->
  <div id="users" class="w3-container city w3-medium">
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
    <script>
      var datattl = document.getElementById("datattl");
      var total = 0;
      function jmlh() {
        total++;
        datattl.innerHTML=total + " Data Ditemukan";
      }
    </script>

  <ul class="list">
    <li>
      <h6 class="name" id="data" style="margin:0px"><b>Data Tempat Ibadah</b></h6>
      <p class="w3-justify">Dataset ini berisi daftar Tempat Ibadah di Kota Depok antara lain : Nama, Alamat, Kategori, Kecamatan dan Koordinat Tempat Ibadah</p>
      <a href="/detail/TempatIbadah">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <p><h6 class="name" id="data2" style="margin:0px"><b>Data TPU</b></h6></p>
      <p class="w3-justify">Data ini berisi tentang jumlah TPU yang ada di Kota Depok antara lain : Nama TPU, Alamat dan Koordinat TPU</p>
      <a href="/detail/TPU">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data3" style="margin:0px"><b>Data Ruang Terbuka Hijau</b></h6>
      <p class="w3-justify">Data ini berisikan informasi Ruang Terbuka Hijau yang berada di Kota Depok, informasi terkait antara lain : Nama, Alamat, Jam Operasional dan Koordinat RTH tersebut</p>
      <a href="/detail/RTH">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data4" style="margin:0px"><b>Data Rumah Sakit</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi lengkap tentang Rumah Sakit yang ada di Depok</p>
      <a href="/detail/RumahSakit">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data5" style="margin:0px"><b>Data Apotek</b></h6>
      <p class="w3-justify">Data ini berisi tentang Apotek dan informasi lainnya yang berkaitan dengan Apotek</p>
      <a href="/detail/Apotek">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data6" style="margin:0px"><b>Data Klinik</b></h6>
      <p class="w3-justify">Data ini berisikan informasi terkait Klinik yang ada di Depok</p>
      <a href="/detail/Klinik">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data7" style="margin:0px"><b>Data Olahraga</b></h6>
      <p class="w3-justify">Dataset ini berisi Informasi terkait tempat olahraga yang ada di Depok seperti : Nama, Alamat, No telp, Fasilitas, Jam Operasional dan Koordinat serta Deskripsi Tempat Olahraga</p>
      <a href="/detail/Olahraga">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data8" style="margin:0px"><b>Data Tempat Kuliner</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi terkait tempat kuliner yang ada di Depok, seperti : Nama, No telp, Alamat, Jam Operasional, Koordinat, serta Deskripsi yang mendukung informasi tempat tersebut</p>
      <a href="/detail/Kuliner">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data9" style="margin:0px"><b>Data Tempat Wisata</b></h6>
      <p class="w3-justify">Data ini berisi tentang informasi terkait tempat wisata yang ada di Depok seperti : Nama, No telp, Alamat, Fasilitas, Jam operasional dan Koordinat serta Deskripsi tempat wisata</p>
      <a href="/detail/Wisata">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data10" style="margin:0px"><b>Data Perpustakaan</b></h6>
      <p class="w3-justify">Dataset ini berisi Informasi terkait Pepustakaan seperti : Nama, Alamat, Jam Operasional dan Koordinat</p>
      <a href="/detail/Perpustakaan">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data11" style="margin:0px"><b>Data Mall</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi terkait Mall yang ada di Depok, seperti : Nama, No telp, Alamat, dan Koordinat</p>
      <a href="/detail/Mall">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data12" style="margin:0px"><b>Data Pasar</b></h6>
      <p class="w3-justify">Data ini berisi informasi terkait Pasar yang ada di Depok, seperti : Nama, No telp, Alamat, Deskripsi, Jam Operasional dan Koordinat</p>
      <a href="/detail/Pasar">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data13" style="margin:0px"><b>Data Supermarket</b></h6>
      <p class="w3-justify">Data ini berisikan mengenai informasi supermarket yang ada di Depok, seperti : Nama, No telp, Alamat, Jam Operasional, Website dan Koordinat</p>
      <a href="/detail/Supermarket">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data14" style="margin:0px"><b>Data Panti Asuhan</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi terkait panti asuhan yang ada di Depok, seperti : Nama Panti, Nama Penanggung Jawab, No telp, Informasi tentang anak, dan deskripsi terkait panti asuhan</p>
      <a href="/detail/PantiAsuhan">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data15" style="margin:0px"><b>Data Angkot</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi terkait angkot yang ada di Depok, seperti : Rute perjalanan angkot, dan Kode trayek</p>
      <a href="/detail/Angkot">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data16" style="margin:0px"><b>Data Jasa Pengiriman</b></h6>
      <p class="w3-justify">Data ini berisi informasi terkait Jasa Pengiriman yang ada di Depok seperti : Nama, Alamat, Jam Operasional, Website dan Koordinat</p>
      <a href="/detail/JasaPengiriman">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    </ul>

    <!-- Pagination -->
    <br>
    <br><!-- 
    <div class="w3-center">
      <div class="w3-bar">
      <ul class="pagination"></ul>
      </div>
    </div> -->
  </div>

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

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Supported by TiregDev © 2017</p></div>

<script type="text/javascript">
var options = { 
  valueNames: [ 'name' ]
  // page: 5,
  // pagination: true
};
var userList = new List('users', options);
</script>

<script>
var ti = document.getElementById("data");
var tiref = firebase.database().ref("Tempat_Ibadah");
var jmlhti = 0;
tiref.on("value", function(snapshot){
  snapshot.forEach(function(ti2){
    jmlhti++;
    jmlh();
  });
});

var tpu = document.getElementById("data2");
var tpuref = firebase.database().ref("TPU");
var jmlhtpu = 0;
tpuref.on("value", function(snapshot2){
  snapshot2.forEach(function(tpu2){
    jmlhtpu++;
    jmlh();
  });
});

var tmn = document.getElementById("data3");
var tmnref = firebase.database().ref("Pertamanan");
var jmlhtmn = 0;
tmnref.on("value", function(snapshot3){
  snapshot3.forEach(function(tmn3){
    jmlhtmn++;
    jmlh();
  });
});

var rs = document.getElementById("data4");
var rsref = firebase.database().ref("Rumah_Sakit");
var jmlhrs = 0;
rsref.on("value", function(snapshot4){
  snapshot4.forEach(function(rs2){
    jmlhrs++;
    jmlh();
  });
});

var ap = document.getElementById("data5");
var apref = firebase.database().ref("Apotek");
var jmlhap = 0;
apref.on("value", function(snapshot5){
  snapshot5.forEach(function(ap2){
    jmlhap++;
    jmlh();
  });
});

var k = document.getElementById("data6");
var kref = firebase.database().ref("Klinik");
var jmlhk = 0;
kref.on("value", function(snapshot6){
  snapshot6.forEach(function(k2){
    jmlhk++;
    jmlh();
  });
});

var olahraga = document.getElementById("data7");
var olahragaref = firebase.database().ref("Olahraga");
var jmlholahraga = 0;
olahragaref.on("value", function(snapshot7){
  snapshot7.forEach(function(olahraga2){
    jmlholahraga++;
    jmlh();
  });
});


var kul = document.getElementById("data8");
var kulref = firebase.database().ref("Kuliner");
var jmlhkul = 0;
kulref.on("value", function(snapshot8){
  snapshot8.forEach(function(kul2){
    jmlhkul++;
    jmlh();
  });
});

var wst = document.getElementById("data9");
var wstref = firebase.database().ref("Wisata");
var jmlhwst = 0;
wstref.on("value", function(snapshot9){
  snapshot9.forEach(function(wst2){
    jmlhwst++;
    jmlh();
  });
});

var perpus = document.getElementById("data10");
var perpusref = firebase.database().ref("Perpustakaan");
var jmlhperpus = 0;
perpusref.on("value", function(snapshot10){
  snapshot10.forEach(function(perpus2){
    jmlhperpus++;
    jmlh();
  });
});

var mall = document.getElementById("data11");
var mallref = firebase.database().ref("Mall");
var jmlhmall = 0;
mallref.on("value", function(snapshot11){
  snapshot11.forEach(function(mall2){
    jmlhmall++;
    jmlh();
  });
});

var psr = document.getElementById("data12");
var psrref = firebase.database().ref("Pasar");
var jmlhpsr = 0;
psrref.on("value", function(snapshot12){
  snapshot12.forEach(function(psr2){
    jmlhpsr++;
    jmlh();
  });
});

var spr = document.getElementById("data13");
var sprref = firebase.database().ref("Supermarket");
var jmlhspr = 0;
sprref.on("value", function(snapshot13){
  snapshot13.forEach(function(spr3){
    jmlhpsr++;
    jmlh();
  });
});

var pa = document.getElementById("data14");
var paref = firebase.database().ref("Panti_Asuhan");
var jmlhpa = 0;
paref.on("value", function(snapshot14){
  snapshot14.forEach(function(pa2){
    jmlhpa++;
    jmlh();
  });
});

var a = document.getElementById("data15");
var aref = firebase.database().ref("Angkot");
var jmlha = 0;
aref.on("value", function(snapshot15){
  snapshot15.forEach(function(a2){
    jmlha++;
    jmlh();
  });
});

var jp = document.getElementById("data16");
var jpref = firebase.database().ref("Jasa_Pengiriman");
var jmlhjp = 0;
jpref.on("value", function(snapshot16){
  snapshot16.forEach(function(jp2){
    jmlhjp++;
    jmlh();
  });
});
</script>

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
@endsection