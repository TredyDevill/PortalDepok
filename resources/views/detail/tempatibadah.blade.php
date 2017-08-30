<!DOCTYPE html>
<html>
<title>Data Jumlah Tempat Ibadah Kota Depok</title>
<link rel="shortcut icon" href="../../img/logoopendata.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
.bgimg {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('../../img/bodymain.png');
    min-height: 100%;
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

<!-- Sidebar/menu (edited) -->
<nav class="w3-sidebar w3-collapse w3-text-white w3-top w3-medium w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#575f8a" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:12px"><i class="fa fa-close"></i>Close Menu</a>
  <div class="w3-container">
    <img src="../../img/logoopendatafull.png" alt="Norway" style="width:200px">
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
<div class="w3-main" style="margin-left:340px; margin-right:40px">
  <!-- Header (edited) -->
  <div class="w3-container paddingtop" id="showcase">
    <h2><b> Data Fasilitas Umum </b></h2>
  </div>

  <!-- Navigasi -->
  <div class="w3-row-padding">
    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openCity(event, 'T');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Topik Kesehatan</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'KD');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'AT');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Aktivitas Terbaru</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'SD');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Sering Diunduh</div>
      </a>
    </div>

    <!-- Navigasi Kumpulan Data -->
    <div id="KD" class="w3-container city w3-medium">
      <br>
      <h3 style="color:#575f8a;"><b>Data Jumlah Tempat Ibadah</b></h3>
      <!-- Isi Data -->
      <p class="w3-margin-left w3-justify">
        Data ini berisi tentang jumlah data tempat ibadah yang ada di Kota Depok.<br>
        <div class="w3-container">
          <h4>Overview</h4>
          <table class="w3-table w3-bordered">
            <tr>
              <th>Nama Tempat Ibadah</th>
              <th>Alamat</th>
            </tr>
            <tbody id="ti">

            </tbody>
          </table>
        </div>
        <br>
      </p>
      <script>
      var blog = firebase.database().ref("Tempat_Ibadah");
      blog.once("value").then(function(snapshot){
        snapshot.forEach(function(childSnapshot){
          var nama = childSnapshot.val().Nama_Tempat;
          var alamat = childSnapshot.val().Alamat;

          $("#ti").append('<tr><td>' + nama + '</td><td>' + alamat + '</td></tr>');
        });
      });
      </script>
      <ul class="w3-ul">
        <li class="w3-padding-16">
          <button class="w3-right w3-btn w3-round-large blue w3-text-white">Unduh</button>
          <img src="../../img/csv.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
          <b><span class="w3-large w3-hover-text-blue">Data Jumlah Tempat Ibadah di Kota Depok</span></b></a><br>
          <span>Unduh untuk melihat data selengkapnya</span>
        </li>
      </ul>

    </div>
    <!-- Navigasi Kumpulan Data (finish) copy semua aja-->

    <!-- Navigasi Topik (edited) copy semua aja-->
    <div id="T" class="w3-container city w3-medium" style="display:none">
      <br>
      <div class="w3-container w3-right">
        <input class="w3-input w3-border" type="text" placeholder="Search...">
      </div>
      <h4 id="datattl" style="color:#575f8a; margin:6px"></h4><br><br>
      <script>
        var datattl = document.getElementById("datattl");
        var total = 0;
        function jmlh() {
          total++;
          datattl.innerHTML=total + " <b>Data Ditemukan</b>";
        }
      </script>
      <!-- Isi Data -->
      <h6 id="data" style="margin:0px"></h6>
      <p class="w3-justify">Dataset ini berisi daftar Sekolah Rawan Banjir Kota Depok variabel pada dataset ini : Nama Sekolah Alamat Kelurahan Kecamatan...</p>
      <a href="/detail/RumahSakit">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>

      <script>
        var rs = document.getElementById("data");
        var rsref = firebase.database().ref("Rumah_Sakit");
        var jmlhrs = 0;
        rsref.on("value", function(snapshot){
        snapshot.forEach(function(rs2){
          jmlhrs++;
          jmlh();
          rs.innerHTML= " <b>Data Rumah Sakit";
        });
        });
      </script>

      <script>

      </script>

      <hr>
      <h6 id="data2" style="margin:0px"></h6>
      <p class="w3-justify">Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok. Variabel penjelas data ini adalah : nama_sekolah kecamatan...</p>
      <a href="/detail">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>

      <script>
        var ap = document.getElementById("data2");
        var apref = firebase.database().ref("Apotek");
        var jmlhap = 0;
        apref.on("value", function(snapshot2){
        snapshot2.forEach(function(ap2){
          jmlhap++;
          jmlh();
          ap.innerHTML=  " <b>Data Apotek";
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
        var k = document.getElementById("data3");
        var kref = firebase.database().ref("Klinik");
        var jmlhk = 0;
        kref.on("value", function(snapshot3){
        snapshot3.forEach(function(k2){
          jmlhk++;
          jmlh();
          k.innerHTML=  " <b>Data Klinik";
        });
        });
      </script>
<!-- finish topik -->


      <!-- Pagination -->
      <br>
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
    <!-- Navigasi Topik (finish) -->
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
  <div id="SD" class="w3-container city w3-medium w3-padding" style="display:none">
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
            <!-- ini di copy jg untuk ngelink ke dataset -->
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
            <a href="../dataset/data1.php" style="text-decoration:none">
              <button class="w3-button w3-block w3-dark-grey w3-hover-amber">CSV</button>
            </a>
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
