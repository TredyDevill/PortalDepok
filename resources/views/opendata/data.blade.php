<!DOCTYPE html>
<html>
<title>Data</title>
<link rel="shortcut icon" href="../../img/logoopendata.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.paddingtop {
  margin-top: 30px;
  margin-bottom:  10px;
}
.blue {
  background-color :#575f8a;
}
.bg-bluemain {
  background-color: rgba(87, 95, 138, 0.35);
}
@media only screen and (max-width: 1000px) {
  .paddingtop {
    margin-top: 80px;
  }
}
</style>
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
</script>
<body>

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
  <img class="w3-display-middle" src="../img/logoopendatafull.png" alt="Norway" style="width: 110px;height: 40px;">
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <!-- Header -->
  <div class="w3-container paddingtop" id="showcase">
    <h2><b>Data</b></h2>
  </div>

  <!-- Isi Data -->
  <div class="w3-container city w3-medium">
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
    <h4 id="datattl" style="color:#575f8a; margin:6px"></h4><br><br>
    <script>
      var datattl = document.getElementById("datattl");
      var total = 0;
      function jmlh() {
        total++;
        datattl.innerHTML=total + " Data Ditemukan";
      }
    </script>

    <h6 id="data" style="margin:0px"></h6>
    <p class="w3-justify">Dataset ini berisi daftar Sekolah Rawan Banjir Kota Depok variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var ti = document.getElementById("data");
      var tiref = firebase.database().ref("Tempat Ibadah");
      var jmlhti = 0;
      tiref.on("value", function(snapshot){
      snapshot.forEach(function(ti2){
        jmlhti++;
        jmlh();
        ti.innerHTML=  " <b>Data Tempat Ibadah";
      });
      });
    </script>

    <hr>
    <p><h6 id="data2" style="margin:0px"></h6></p>
    <p class="w3-justify">Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok. Variabel penjelas data ini adalah : nama_sekolah kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var tpu = document.getElementById("data2");
      var tpuref = firebase.database().ref("TPU");
      var jmlhtpu = 0;
      tpuref.on("value", function(snapshot2){
      snapshot2.forEach(function(tpu2){
        jmlhtpu++;
        jmlh();
        tpu.innerHTML= " <b>Data TPU";
      });
      });
    </script>

    <hr>
    <h6 id="data3" style="margin:0px"></h6>
    <p class="w3-justify">Data ini berisikan mengenai jumlah siswa dan guru SMP Negeri di Kota Depok variabel data ini berisikan : nama_sekolah kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var tmn = document.getElementById("data3");
      var tmnref = firebase.database().ref("Pertamanan");
      var jmlhtmn = 0;
      tmnref.on("value", function(snapshot3){
      snapshot3.forEach(function(tmn3){
        jmlhtmn++;
        jmlh();
        tmn.innerHTML= " <b>Data Ruang Terbuka Hijau";
      });
      });
    </script>

    <hr>
    <h6 style="margin:0px"><b>Data Sekolah Rawan Banjir</b></h6>
    <p class="w3-justify">Dataset ini berisi daftar Sekolah Rawan Banjir Kota Depok variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SD Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok. Variabel penjelas data ini adalah : nama_sekolah kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SMP Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisikan mengenai jumlah siswa dan guru SMP Negeri di Kota Depok variabel data ini berisikan : nama_sekolah kecamatan...</p>
    <a href="/detail">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

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
  <!-- Navigasi Kumpulan Data (finish) -->
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Supported by TiregDev © 2017</p></div>



</body>
</html>
