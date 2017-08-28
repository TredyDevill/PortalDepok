<!DOCTYPE html>
<html>
<title>Topik</title>
<link rel="shortcut icon" href="../img/logoopendata.png">
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
    <a href="/opendata"><img src="../img/logoopendatafull.png" alt="Depok Open Data" style="width:200px"></a>
  </div><br>
  <div class="w3-bar-block">
    <a href="/opendata" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href="/data" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Data</a>
    <a href="/topik" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-gray">Topik</a>
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
    <h2><b>TOPIK</b></h2>
    <p class="w3-medium">Mengenai Unit Kerja Pemerintah dan Instansi serta Organisasi Kota Depok</p>
  </div>

  <!-- Isi Data -->
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <a href="/opendata/pendidikan">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/pendidikan.png')}}" style="width:100%" alt="Kesehatan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PENDIDIKAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/opendata/kesehatan">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/kesehatan.png')}}" style="width:100%" alt="Pendidikan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">KESEHATAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/opendata/perekonomian">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/keuangan.png')}}" style="width:100%" alt="Pariwisata">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PEREKONOMIAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/opendata/fasilitasumum">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/fasilitasumum.png')}}" style="width:100%" alt="Keuangan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">FASILITAS UMUM</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <a href="/opendata/sosial">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/sosial.png')}}" style="width:100%" alt="Kependudukan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">SOSIAL</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/opendata/pariwisata">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/pariwisata.png')}}" style="width:100%">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium" style="letter-spacing:2px">PARIWISATA</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="/opendata/olahraga">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/olahraga.png')}}" style="width:100%" alt="Bencana">
          <div class="w3-display-right" style="top: 30%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">OLAHRAGA</div>
          </div>
        </div>
      </a>
    </div>
      <div class="w3-col l3 m6">
        <a href="/opendata/transportasi">
          <div class="w3-display-container w3-opacity-min">
            <img src="{{URL::asset('/img/transportasi.png')}}" style="width:100%" alt="Bencana">
            <div class="w3-display-right" style="top: 30%; right: 5%;">
              <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">TRANSPORTASI</div>
            </div>
          </div>
        </a>
      </div>
    </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <a href="topik/keagamaan.php">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/keagamaan.png')}}" style="width:100%" alt="Keagamaan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">KEAGAMAAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="topik/kependudukan.php">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('img/kependudukan.png')}}" style="width:100%" alt="Kependudukan">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">KEPENDUDUKAN</div>
          </div>
        </div>
      </a>
    </div>
    <div class="w3-col l3 m6">
      <a href="topik/instansi.php">
        <div class="w3-display-container w3-opacity-min">
          <img src="{{URL::asset('/img/instansi.png')}}" style="width:100%" alt="Instansi">
          <div class="w3-display-right" style="top: 24%; right: 5%;">
            <div class="w3-text-white w3-medium w3-right-align" style="letter-spacing:2px">INSTANSI</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  </div>
</div>
<!-- End page content -->


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