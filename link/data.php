<!DOCTYPE html>
<html>
<title>Data</title>
<link rel="shortcut icon" href="../../images/logoopendata.png">
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
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-text-white w3-top w3-medium w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#575f8a" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:12px"><i class="fa fa-close"></i>Close Menu</a>
  <div class="w3-container">
    <img src="../images/logoopendatafull.png" alt="Norway" style="width:200px">
  </div><br>
  <div class="w3-bar-block">
    <a href="..index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Organisasi</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-gray">Topik</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Tentang</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-text-white w3-xlarge w3-padding" style="background-color:#575f8a">
  <a href="javascript:void(0)" class="w3-button w3-margin-right w3-medium" onclick="w3_open()" style="background-color:#575f8a">☰</a>
  <img class="w3-display-middle" src="../images/logoopendatafull.png" alt="Norway" style="width: 110px;height: 40px;">
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
    <h4 style="color:#575f8a; margin:6px"><b>1289 Data Ditemukan</b></h4><br><br>
    <h6 style="margin:0px"><b>Data Sekolah Rawan Banjir</b></h6>
    <p class="w3-justify">Dataset ini berisi daftar Sekolah Rawan Banjir Kota Depok variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SD Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok. Variabel penjelas data ini adalah : nama_sekolah kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SMP Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisikan mengenai jumlah siswa dan guru SMP Negeri di Kota Depok variabel data ini berisikan : nama_sekolah kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

    <hr>
    <h6 style="margin:0px"><b>Data Sekolah Rawan Banjir</b></h6>
    <p class="w3-justify">Dataset ini berisi daftar Sekolah Rawan Banjir Kota Depok variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SD Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok. Variabel penjelas data ini adalah : nama_sekolah kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

    <hr>
    <h6 style="margin:0px"><b>Data Jumlah Siswa dan Guru SMP Negeri Kota Depok</b></h6>
    <p class="w3-justify">Data ini berisikan mengenai jumlah siswa dan guru SMP Negeri di Kota Depok variabel data ini berisikan : nama_sekolah kecamatan...</p>
    <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>

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

</body>
</html>
