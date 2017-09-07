<!DOCTYPE html>
<html>
<title>Tentang</title>
<link rel="shortcut icon" href="{{URL::asset('/img/logoopendata.png')}}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<style>

@font-face {
  font-family: "Brandon_Grotesque_bold";
  src: url(../assets/font/Brandon_blk.otf);}

@font-face {
  font-family: "Brandon_Grotesque_reg";
  src: url(../assets/font/Brandon_reg.otf);}

.f_bold {
  font-family: "Brandon_Grotesque_bold";
}

.f_reg {
  font-family: "Brandon_Grotesque_reg";
}

.centerpagination {
    text-align: center;
}

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.nav_blue {
  background-color: #575f8a;
}
.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

<body class="w3-light-grey">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/opendata">
    <div class="w3-bar-item" style="letter-spacing: 5px; font-size:15pt;">
      <img src="{{URL::asset('/img/logoopendata.png')}}" style="width:50px; height:50px;margin-left:2em">
      <div class="f_bold w3-text-white w3-display-left" style="font-size:17pt;margin-left:5.5em">OPEN DATA</div>
    </div>
    </a>
    <div class="w3-text-white w3-right w3-hide-small w3-display-right" style="margin-right:3em;letter-spacing:1px">
      <a href="/data" class="w3-bar-item w3-button">Data</a>
      <a href="/topik" class="w3-bar-item w3-button">Topik</a>
      <a href="/tentang" class="w3-bar-item w3-button">Tentang</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/data" class="w3-bar-item w3-button" onclick="toggleFunction()">Data</a>
    <a href="/topik" class="w3-bar-item w3-button">Topik</a>
    <a href="/tentang" class="w3-bar-item w3-button">Tentang</a>
  </div>
</div>

<div style=" width:100%;">
  <!-- Slideshow -->
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:480px;">
      <img src="{{URL::asset('/img/ui.jpg')}}" style="position:absolute; width:100%; height:480px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff;">
        <label class="f_bold w3-xxxlarge label_header w3-text-white w3-padding"><b> Apa itu Depok Open Data? </b></label>
      </div>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:480px;">
      <img src="{{URL::asset('/img/depoklma.jpg')}}" style="position:absolute; width:100%; height:480px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff;">
        <label class="f_bold w3-xxxlarge label_header w3-text-white w3-padding"><b> Apa itu Depok Open Data? </b></label>
      </div>
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:480px;">
      <img src="{{URL::asset('/img/defan.jpg')}}" style="position:absolute; width:100%; height:480px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff;">
        <label class="f_bold w3-xxxlarge label_header w3-text-white w3-padding"><b> Apa itu Depok Open Data? </b></label>
      </div>
    </div>
  </div>
<!-- END w3-content -->
</div>

<div class="w3-container" style="background:#fff"> 
  <div class="w3-content"> 
    <div class="w3-row w3-content w3-padding-64" style="max-width:1100px">
      <div class="w3-half w3-center" style="padding-right:3em">
        <img class="bottom-img" src="{{URL::asset('/img/b3.png')}}" style="width:100%;">
      </div>
      <div class="w3-half w3-padding-16" style="padding-left:3em">
        <h4 class="f_bold"><b>DEPOK OPEN DATA</b></h4>
        <font class="w3-justify"> Merupakan Portal Data Terpadu Pemerintah Kota Depok yang menyajikan data-data dari seluruh Unit Kerja di Pemerintah dan Seluruh Instansi serta Organisasi Kota Depok. Depok Open Data menyediakan data dalam format yang mudah dicari, diakses serta digunakan kembali, dengan harapan publik/masyarakat pengguna portal dapat memanfaatkan data yang telah tersedia serta menciptakan inovasi dan peran serta dalam membangun kota Jakarta dan negara Indonesia menjadi lebih baik.</font>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-white w3-padding-32">
  <h3 class="f_bold w3-center">CONTACT</h3>
  <p class="w3-center w3-medium">Informasi lebih lengkap dapat menghubungi :</p>
  <div class="w3-content" style="margin-top:64px; margin-bottom:5em">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Depok, Indonesia</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: (021) 7773610</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: opendata@depok.go.id</p>
      <br>
      <form action="">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
  </div>
</div>

<div class="w3-row w3-center" style="background-color: #eee;">
  <div class="w3-content" style="max-width:800px;">
    <div class="w3-third w3-section">
      <img src="{{URL::asset('/img/logodpk.png')}}" width="190px" height="60px" style="padding-top:1.5em">
    </div>
    <div class="w3-third  w3-section">
      <img src="{{URL::asset('/img/logodsc.png')}}" width="140px" height="80px">
    </div>
    <div class="w3-third w3-section">
      <img src="{{URL::asset('/img/logohidepok.png')}}" width="80px" height="80px">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-dark-gray w3-padding w3-text-light-gray">
  <div class="w3-row">
    <div class="w3-third w3-container">
      <div class="w3-xlarge w3-section" style="letter-spacing:8px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
      </div>
    </div>
    <div class="w3-third w3-container"> 
      <h3 style="letter-spacing:3px">HI-DEPOK</h3>
    </div>
    <div class="w3-third w3-container" style="padding:21px">
      <a href="#home" class="w3-bar-item w3-hover-text-white" style="text-decoration:none" onclick="toggleFunction()">Home</a>
      <a href="#download" class="w3-bar-item w3-hover-text-white" style="text-decoration:none;padding: 0em 1.7em;" onclick="toggleFunction()">Download</a>
      <a href="#about" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">About</a>
    </div>
  </div>
  <hr style="margin: 0em 6em;border-top: 1px solid rgba(238, 238, 238, 0.16);">
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
  <hr style="margin: 0em 6em; border-top: 1px solid rgba(238, 238, 238, 0.16);">
  <p>Supported by TiregDev © 2017</p>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>
<script>
  // Change style of navbar on scroll
  window.onscroll = function() {myFunction()};
  function myFunction() {
  var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " nav_blue" + " w3-text-white";
    } else {
      navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top nav_blue w3-text-white", "");
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

  // Automatic Slideshow - change image every 4 seconds
  var myIndex = 0;
  carousel();

  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
  }

</script>

</body>
</html>
