@extends('layouts.Detail')

<title>Detail Rumah Sakit</title>

@section('content')
  <!-- Header (edited) -->
  <div class="w3-container paddingtop" id="showcase">
    <h2><b> Data Kesehatan </b></h2>
  </div>

  <!-- Navigasi -->
  <div class="w3-row-padding">
    <div class="w3-row">
      <a href="javascript:void(0)" onclick="openCity(event, 'T');">
        <div class="w3-half tablink w3-hover-light-grey w3-bottombar w3-padding" style="border-bottom:6px solid rgb(255, 255, 255)">Topik Kesehatan</div>
      </a>
      <a href="javascript:void(0)" onclick="openCity(event, 'KD');">
        <div class="w3-half tablink w3-hover-light-grey w3-bottombar w3-padding w3-border-black">Kumpulan Data</div>
      </a>
    </div>

    <!-- Navigasi Kumpulan Data -->
    <div id="KD" class="w3-container city w3-medium">
    <div id="users">
      <br>
      <h3 id="dataa" style="color:#575f8a;"></h3>

      <!-- Isi Data -->
      <p class="w3-margin-left w3-justify">
        Data ini berisi tentang jumlah data Rumah Sakit yang ada di Kota Depok.<br>
        <div class="w3-container">
          <h4>Overview</h4>
          <!-- <div class="w3-container w3-right">
            <input id="myInput" class="search w3-border" type="text" placeholder="Search...">
          </div> -->
<!-- 
           <script>
            function filterTable(event){
            var filter = event.target.value.toUpperCase();
            var rows = document.querySelector("#myTable tbody").rows;
            for (var i =0; i<rows.length; i++){
              var firstCol=rows[i].cells[0].textContent.toUpperCase();
              var secondCol=rows[i].cells[1].textContent.toUpperCase();
              if (firstCol.indexOf(filter)> -1 || secondCol.indexOf(filter)>-1){
                rows[i].style.display="";
              }
              else{
                rows[i].style.display="none";
              }
            }
          }
          document.querySelector('#myInput').addEventListener('keyup', filterTable, false);
          </script> -->

          <table class="w3-table w3-bordered" id="myTable">
            <thead>
            <tr>
              <th>Nama Rumah Sakit</th>
              <th>Alamat</th>
            </tr>
            </thead>
            <tbody id="rs">

            </tbody>
          </table>
        </div>
        <br>
      </p>
      <script>
      var blog = firebase.database().ref("Rumah_Sakit");
      blog.once("value").then(function(snapshot){
        snapshot.forEach(function(childSnapshot){
          var nama = childSnapshot.val().Nama_RS;
          var alamat = childSnapshot.val().Alamat;

          $("#rs").append('<tr><td>' + nama + '</td><td>' + alamat + '</td></tr>');
        });
      });
      </script> 

      <ul class="w3-ul">
        <li class="w3-padding-16">
          <button class="w3-right w3-btn w3-round-large blue w3-text-white">Unduh</button>
          <img src="../../img/csv.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
          <b><span class="w3-large w3-hover-text-blue">Data Jumlah Rumah Sakit di Kota Depok</span></b></a><br>
          <span>Unduh untuk melihat data selengkapnya</span>
        </li>
      </ul>
      </div>

    </div>
    <!-- Navigasi Kumpulan Data (finish) copy semua aja-->

    <!-- Navigasi Topik (edited) copy semua aja-->
    <div id="T" class="w3-container city w3-medium" style="display:none">
      <br><!-- 
      <div class="w3-container w3-right">
        <input class="search w3-border" type="text" placeholder="Search...">
      </div> -->
      <h4 id="datattl" style="color:#575f8a; margin:6px"></h4><br><br>

      <!-- Isi Data -->
      <ul class="list">
    <li>
      <h6 class="name" id="data" style="margin:0px"><b>Data Rumah Sakit</b></h6>
      <p class="w3-justify">Dataset ini berisi informasi lengkap tentang Rumah Sakit yang ada di Depok</p>
      <a href="/detail/RumahSakit">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data2" style="margin:0px"><b>Data Apotek</b></h6>
      <p class="w3-justify">Data ini berisi tentang Apotek dan informasi lainnya yang berkaitan dengan Apotek</p>
      <a href="/detail/Apotek">
        <button class="w3-button w3-padding-small w3-text-white w3-small w3-border w3-round-large w3-amber">CSV</button>
      </a>
    </li>

    <hr>
    <li>
      <h6 class="name" id="data3" style="margin:0px"><b>Data Klinik</b></h6>
      <p class="w3-justify">Data ini berisikan informasi terkait Klinik yang ada di Depok</p>
      <a href="/detail/Klinik">
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
  </div>
    <!-- Navigasi Topik (finish) -->

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Supported by TiregDev © 2017</p></div>
@endsection

 <script type="text/javascript">
    var options = { 
      valueNames: [ 'name' ],
      page: 3,
      pagination: true
    };
    var userList = new List('T', options);
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
        var datattl = document.getElementById("datattl");
        var total = 0;
        function jmlh() {
          total++;
          datattl.innerHTML=total + " <b>Data Ditemukan</b>";
        }
        var rs = document.getElementById("data");
        var rs1 = document.getElementById("dataa");
        var rsref = firebase.database().ref("Rumah_Sakit");
        var jmlhrs = 0;
        rsref.on("value", function(snapshot){
        snapshot.forEach(function(rs2){
          jmlhrs++;
          jmlh();
          rs1.innerHTML= jmlhrs + " <b>Data Jumlah Rumah Sakit";
        });
        });

        var ap = document.getElementById("data2");
        var apref = firebase.database().ref("Apotek");
        var jmlhap = 0;
        apref.on("value", function(snapshot2){
        snapshot2.forEach(function(ap2){
          jmlhap++;
          jmlh();
        });
        });

        var k = document.getElementById("data3");
        var kref = firebase.database().ref("Klinik");
        var jmlhk = 0;
        kref.on("value", function(snapshot3){
        snapshot3.forEach(function(k2){
          jmlhk++;
          jmlh();
        });
        });
      </script>