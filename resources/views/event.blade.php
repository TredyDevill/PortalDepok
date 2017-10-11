<!DOCTYPE html>
<html>
<title>Event | Hi-Depok</title>
<link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
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
    <div class="w3-bar-item" style="letter-spacing: 5px; font-size:15pt;">
      <img src="{{ URL::asset('img/minilogo.png') }}" style="width:50px; height:50px;margin-left:2em">
      <div class="f_bold w3-text-white w3-display-left" style="font-size:17pt;margin-left:5.5em">HI-DEPOK</div>
    </div>
    <div class="w3-text-white w3-right w3-hide-small w3-display-right" style="margin-right:3em;letter-spacing:1px">
      <a href="/#download" class="w3-bar-item w3-button">Download</a>
      <a href="/maps" class="w3-bar-item w3-button">Maps</a>
      <a href="/blog" class="w3-bar-item w3-button">Blog</a>
      <!-- <a href="/opendata" class="w3-bar-item w3-button">OpenData</a> -->
      <a href="/event" class="w3-bar-item w3-button">Event</a>
      <a href="/#about" class="w3-bar-item w3-button">About</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/#download" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
    <a href="/hidepok/maps.php" class="w3-bar-item w3-button">Maps</a>
    <a href="/hidepok/blog.php" class="w3-bar-item w3-button">Blog</a>
    <!-- <a href="/opendata" class="w3-bar-item w3-button">OpenData</a> -->
    <a href="/hidepok/event.php" class="w3-bar-item w3-button">Event</a>
    <a href="/#about" class="w3-bar-item w3-button">About</a>
  </div>
</div>

<div class="w3-content" style="max-width:1600px">
  <!-- Slideshow -->
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:650px;">
      <img src="{{ URL::asset('img/slideblog_1.jpg') }}" style="position:absolute; width:100%; height:650px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff; margin-bottom:7px">
        <label class="f_bold w3-wide w3-xxxlarge label_header w3-text-white"><b> EVENT </b></label>
      </div>
      <p class="f_reg w3-text-white" style="margin:0;"> Lihat acara yang seru di Kota Depok</p>
    </div>
    <div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small" style="left:2%">
      <h3 class="f_reg w3-xxlarge"><b>Suasana Taman Balaikota Depok Terbaru</b></h3>  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:650px;">
      <img src="{{ URL::asset('img/slideblog_2.jpg') }}" style="position:absolute; width:100%; height:650px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff; margin-bottom:7px">
        <label class="f_bold w3-wide w3-xxxlarge label_header w3-text-white"><b> EVENT </b></label>
      </div>
      <p class="f_reg w3-text-white" style="margin:0;"> Lihat acara yang seru di Kota Depok </p>
    </div>
    <div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small" style="left:2%">
      <h3 class="f_reg w3-xxlarge"><b>Membatik Merupakan Kegiatan Seru</b></h3> 
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:650px;">
      <img src="{{ URL::asset('img/slideblog_3.jpg') }}" style="position:absolute; width:100%; height:650px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff; margin-bottom:7px">
        <label class="f_bold w3-wide w3-xxxlarge label_header w3-text-white"><b> EVENT </b></label>
      </div>
      <p class="f_reg w3-text-white" style="margin:0;"> Lihat acara yang seru di Kota Depok </p>
    </div>
    <div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small" style="left:2%">
      <h3 class="f_reg w3-xxlarge"><b>Pemerintah Terjun Langsung Membantu Warga</b></h3>    
    </div>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-container w3-white">
  <div class="w3-content w3-padding-64">
    <div class="w3-row w3-display-container">
      <div class="w3-col m6 w3-center w3-padding-large">
        <img src="{{ URL::asset('img/event1.jpg') }}" class="w3-round w3-image" alt="Event" width="300" height="233">
      </div>
      <!-- Hide this text on small devices -->
      <div class="w3-col m6 sw3-padding-large w3-justify w3-display-right">
        <p class="f_bold w3-xlarge">NEW EVENT : Depok Festival 2</p>
        <p>Untuk memeriahkan HUT KE-19 KOTA DEPOK, Pemerintah kota depok bekerjasama dengan Karang Taruna dan PT. Kreatif Jakarta Indotama Dengan bangga mempersembahkan "DEPOK FESTIVAL 2" 20-21 Mei 2017, tutup jalan raya plenongan 5 Menit dari Walikota Depok...
        </p>
        <div class="w3-padding-16">
        <button class="w3-btn w3-cyan w3-text-white"> Lihat Selengkapnya </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h2 class="f_bold w3-text-grey">ALL EVENT</h2>

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="{{ URL::asset('img/event1.jpg') }}" style="width:100%;padding: 2em 1em 0em 0em;">
        <img src="{{ URL::asset('img/event2.jpg') }}" style="width:100%;padding: 2em 1em 0em 0em;">
        <img src="{{ URL::asset('img/event3.png') }}" style="width:100%;padding: 2em 1em 0em 0em;">
      </div>

      <div class="w3-half">
        <img src="{{ URL::asset('img/event4.jpg') }}" style="width:100%;padding: 2em 1em 0em 0em;">
        <img src="{{ URL::asset('img/event1.jpg') }}" style="width:100%;padding: 2em 1em 0em 0em;">
        <img src="{{ URL::asset('img/event2.jpg') }}" style="width:100%;padding: 2em 1em 0em 0em;">
      </div>
    <!-- End photo grid -->
    </div>
    <div class="w3-center w3-bar" style="padding:5em">
      <a href="#" class="w3-button">&laquo;</a>
      <a href="#" class="w3-btn w3-cyan w3-text-white">1</a>
      <a href="#" class="w3-button">2</a>
      <a href="#" class="w3-button">3</a>
      <a href="#" class="w3-button">4</a>
      <a href="#" class="w3-button">&raquo;</a>
    </div>
  <!-- End Portfolio Section -->
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
      <a href="/" class="w3-bar-item w3-hover-text-white" style="text-decoration:none" onclick="toggleFunction()">Home</a>
      <a href="/#download" class="w3-bar-item w3-hover-text-white" style="text-decoration:none;padding: 0em 1.7em;" onclick="toggleFunction()">Download</a>
      <a href="/#about" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">About</a>
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
      navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-cyan" + " w3-text-white";
    } else {
      navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-cyan w3-text-white", "");
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
