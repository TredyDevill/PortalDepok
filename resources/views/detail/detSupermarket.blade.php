@extends('layouts.Detail')

<title>Detail Supermarket</title>

@section('content')
  <!-- Header (edited) -->
  <div class="w3-container paddingtop" id="showcase">
    <h2><b> Data Perekonomian </b></h2>
  </div>

  <!-- Navigasi -->
  <div class="w3-row-padding">
    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openCity(event, 'T');">
        <div class="w3-half tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Topik Perekonomian</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'KD');">
        <div class="w3-half tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
      </a>
    </div>

    <!-- Navigasi Kumpulan Data -->
    <div id="KD" class="w3-container city w3-medium">
      <br>
      <h3 id="dataa" style="color:#575f8a;"></h3>
      <!-- Isi Data -->
      <p class="w3-margin-left w3-justify">
        Data ini berisi tentang jumlah data Supermarket yang ada di Kota Depok.<br>
        <div class="w3-container">
          <h4>Overview</h4>
          <table class="w3-table w3-bordered">
            <tr>
              <th>Nama Supermarket</th>
              <th>Alamat</th>
            </tr>
            <tbody id="psr">

            </tbody>
          </table>
        </div>
        <br>
      </p>
      <script>
      var blog = firebase.database().ref("Supermarket");
      blog.once("value").then(function(snapshot){
        snapshot.forEach(function(childSnapshot){
          var nama = childSnapshot.val().Nama;
          var alamat = childSnapshot.val().Alamat;

          $("#psr").append('<tr><td>' + nama + '</td><td>' + alamat + '</td></tr>');
        });
      });
      </script>
      <ul class="w3-ul">
        <li class="w3-padding-16">
          <button class="w3-right w3-btn w3-round-large blue w3-text-white">Unduh</button>
          <img src="../../img/csv.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
          <b><span class="w3-large w3-hover-text-blue">Data Jumlah Supermarket di Kota Depok</span></b></a><br>
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
    <p class="w3-justify">Dataset ini berisi informasi terkait Mall yang ada di Depok, seperti : Nama, No telp, Alamat, dan Koordinat</p>
    <a href="/detail/Mall">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var mall = document.getElementById("data");
      var mallref = firebase.database().ref("Mall");
      var jmlhmall = 0;
      mallref.on("value", function(snapshot){
      snapshot.forEach(function(mall2){
        jmlhmall++;
        jmlh();
        mall.innerHTML=  " <b>Data Mall";
      });
      });
    </script>

    <hr>
    <h6 id="data2" style="margin:0px"></h6>
    <p class="w3-justify">Data ini berisi informasi terkait Pasar yang ada di Depok, seperti : Nama, No telp, Alamat, Deskripsi, Jam Operasional dan Koordinat</p>
    <a href="/detail/Pasar">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var psr = document.getElementById("data2");
      var psrref = firebase.database().ref("Pasar");
      var jmlhpsr = 0;
      psrref.on("value", function(snapshot2){
      snapshot2.forEach(function(psr2){
        jmlhpsr++;
        jmlh();
        psr.innerHTML=  " <b>Data Pasar";
      });
      });
    </script>

    <hr>
    <h6 id="data3" style="margin:0px"></h6>
    <p class="w3-justify">Data ini berisikan mengenai informasi supermarket yang ada di Depok, seperti : Nama, No telp, Alamat, Jam Operasional, Website dan Koordinat</p>
    <a href="/detail/Supermarket">
      <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
    </a>

    <script>
      var spr = document.getElementById("data3");
      var spr1 = document.getElementById("dataa");
      var sprref = firebase.database().ref("Supermarket");
      var jmlhspr = 0;
      sprref.on("value", function(snapshot3){
      snapshot3.forEach(function(spr3){
        jmlhspr++;
        jmlh();
        spr.innerHTML=  " <b>Data Supermarket";
        spr1.innerHTML=  jmlhspr + " <b>Data Jumlah Supermarket";
      });
      });
    </script>
<!-- finish topik -->


      <!-- Pagination -->
      <br><!-- 
      <div class="w3-center">
        <div class="w3-bar">
          <a href="#" class="w3-button">&laquo;</a>
          <a href="#" class="w3-button w3-gray">1</a>
          <a href="#" class="w3-button">2</a>
          <a href="#" class="w3-button">3</a>
          <a href="#" class="w3-button">4</a>
          <a href="#" class="w3-button">&raquo;</a>
        </div>
      </div> -->
    </div>
    <!-- Navigasi Topik (finish) -->
  </div>

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

@endsection