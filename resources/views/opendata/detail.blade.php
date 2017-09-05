<!DOCTYPE html>
<html>
<title>Data Jumlah Siswa dan Guru SD Negeri Kota Depok</title>
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
<body>

<!-- Sidebar/menu (edited) -->
<nav class="w3-sidebar w3-collapse w3-text-black w3-top w3-medium" style="z-index:3;width:300px;font-weight:bold;background-color:#575f8a" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:12px"><i class="fa fa-close"></i>Close Menu</a>
  <div class="w3-container">
    <img src="{{URL::asset('/img/logoopendatafull.png')}}" alt="Norway" style="width:200px">
  </div><br>
  <div class="w3-bar-block">
    <a href="/opendata" onclick="w3_close()" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Home</a> 
    <a href="/data" onclick="w3_close()" class="w3-bar-item w3-leftbar w3-border-gray w3-text-white" style="text-decoration:none">Data</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-bar-item w3-hover-text-white w3-block w3-left-align" id="myBtn" style="text-decoration:none">
      Topik <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="/topik/kesehatan" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Kesehatan</a>
      <a href="/topik/pendidikan" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Pendidikan</a>
      <a href="/topik/perekonomian" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Perekonomian</a>
      <a href="/topik/sosial" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Sosial</a>
      <a href="/topik/pariwisata" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Pariwisata</a>
      <a href="/topik/olahraga" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Olahraga</a>
      <a href="/topik/transportasi" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Transportasi</a>
      <a href="/topik/fasilitasumum" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Fasilitas Umum</a>
    </div> 
    <a href="/tentang" onclick="w3_close()" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">Tentang</a>
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
    <h2><b> Data </b></h2>
  </div>

  <!-- Navigasi -->
  <div class="w3-row-padding">
    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openCity(event, 'KD');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'T');">
        <div class="w3-quarter tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Topik</div>
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
      <h3 style="color:#575f8a;"><b>Data Jumlah Siswa dan Guru SD Negeri Kota Depok</b></h3>
      <!-- Isi Data -->
      <p class="w3-margin-left w3-justify">
        Data ini berisi tentang jumlah siswa dan guru SD Negeri Provinsi DKI Jakarta.<br>
        Variabel penjelas data ini adalah :<br>
        1. nama_sekolah<br>
        2. kecamatan<br>
        3. kota_administrasi<br>
        4. jumlah_siswa<br>
        5. jumlah_guru<br>
        6. latitude<br>
        7. longitude
      </p>
      <ul class="w3-ul">
        <li class="w3-padding-16">
          <button class="w3-right w3-btn w3-round-large blue w3-text-white">Unduh</button>
          <img src="../../img/csv.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
          <a href="data2.php" style="text-decoration:none"><b><span class="w3-large w3-hover-text-blue">Data Jumlah Siswa dan Guru SD Negeri Kota Depok</span></b></a><br>
          <span>Data ini berisi tentang jumlah siswa dan guru SD Negeri Kota Depok...</span>
        </li>
      </ul>
      <div class="w3-container">
        <h4>Additional Info</h4>
        <table class="w3-table w3-bordered">
          <tr>
            <th>Field</th>
            <th>Nilai</th>
          </tr>
          <tr>
            <td>Last Updated</td>
            <td>April 12, 2017, 09:33</td>
          </tr>
          <tr>
            <td>Dibuat</td>
            <td>February 7, 2017, 05:46</td>
          </tr>
          <tr>
            <td>Sumber</td>
            <td>Dinas Pendidikan</td>
          </tr>
          <tr>
            <td>Frekuensi Penerbitan</td>
            <td>1 Tahun Sekali</td>
          </tr>
          <tr>
            <td>Tahun</td>
            <td>2017</td>
          </tr>
          <tr>
            <td>Cakupan</td>
            <td>Kota Depok</td>
          </tr>
          <tr>
            <td>Penyajian</td>
            <td>Kecamatan</td>
          </tr>
          <tr>
            <td>Kontak</td>
            <td>dinkes@depok.go.id</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- Navigasi Kumpulan Data (finish) copy semua aja-->

    <!-- Navigasi Topik (edited) copy semua aja-->
    <div id="T" class="w3-container city w3-medium" style="display:none">
      <br>
      <div class="w3-container w3-right">
        <input class="w3-input w3-border" type="text" placeholder="Search...">
      </div>
      <h4 style="color:#575f8a; margin:6px"><b>40 Topik</b></h4><br><br>
      <!-- Data yang Sering Diunduh -->
      <div class="w3-row-padding" style="margin-top:26px">
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

  <script>
  // Accordion 
  function myAccFunc() {
      var x = document.getElementById("demoAcc");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }

  // Click on the "Jeans" link on page load to open the accordion for demo purposes
  document.getElementById("myBtn").click();
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
