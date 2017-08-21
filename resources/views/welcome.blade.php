<!DOCTYPE html>
<html>
<title>Hi-Depok</title>
<link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/bghidepok.png');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img/feature.jpg");
    min-height: 400px;
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img/bg.png");
    min-height: 400px;
}
.label_header {
  display: block;
  text-align: center!important;
  letter-spacing: 10px;
    font-size: 55px;
}
.see_more {
  color: #fff!important;
    background-color: #000!important;
    float: right!important;
    margin-top: 16px!important;
    margin-bottom: 16px!important;
    border: none;
    display: inline-block;
    outline: 0;
    letter-spacing: 3px;
    padding: 0.7em 2.5em;
    vertical-align: middle;
    overflow: hidden;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}
.flarge {
  font-size: 40pt;
  text-align: right;
}
.w3-bar {
    padding: 1em 2em;
 }
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
@media only screen and (max-width: 800px) {
    .label_header {
    letter-spacing: 5px;
      font-size: 20px;
  }
  .see_more {
      padding: 0.2em 1.8em;
      font-size: 12px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <div class="w3-bar-item" style="letter-spacing: 5px; font-size:15pt"><b>HI-DEPOK</b></div>
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#download" class="w3-bar-item w3-button">Download</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#home" class="w3-bar-item w3-button" onclick="toggleFunction()">Home</a>
    <a href="#download" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
    <a href="#about" class="w3-bar-item w3-button">About</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  <label class="label_header w3-text-cyan w3-animate-zoom"><b> WE SHARE WE CARE </b></label>
    <button class="see_more w3-hover-dark-gray" type="submit">
      SEE MORE <i class="fa fa-arrow-right"></i>
    </button>
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
  </div>
</div>

<!--Definisi -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <!-- <h3 class="w3-center">DEFINITION</h3>
  <p class="w3-center"><em>I love photography</em></p> -->
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="img/definition.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Definition Hi-Depok" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-small w3-padding-large ">
      <h3><b>Definition</b></h3>
      <p style="font-size:12pt">
        Hi-Depok merupakan wujud peningkatan pelayanan pemerintah Kota Depok kepada warganya. Aplikasi ini dapat membantu warga Kota Depok dalam berbagai aspek pelayanan seperti pelayanan kesehatan, keamanan, sosial dan juga kebutuhan akan informasi.
      </p>
    </div>
  </div>
</div>

<!-- Fitur -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center" style="letter-spacing:5px">FEATURES</h3>
  <p class="w3-center"><em>The great features of Hi-Depok</em></p><br>

  <div class="w3-content w3-center w3-display-container">
    <div class="w3-display-container mySlides">
      <img src="img/fitur1.png" style="width:510px">
    </div>

    <div class="w3-display-container mySlides">
      <img src="img/fitur2.png" style="width:510px">
    </div>

    <div class="w3-display-container mySlides">
      <img src="img/fitur3.png" style="width:510px">
    </div>

    <button class="w3-button w3-display-left w3-light-gray" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right w3-light-gray" onclick="plusDivs(1)">&#10095;</button>

    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="w3-container w3-padding-32">
  <div class="w3-display-middle">
  </div>
</div>

<!-- Search Data -->
<div class="w3-row w3-center w3-light-gray w3-padding-64">
  <h3 class="w3-center" style="margin-bottom:2em">
    SEARCH DATA <img src="img/icon/map.png" class="w3-circle" style="width:50px;">
  </h3>
  <div class="w3-content" style="max-width:1000px;">
    <div class="w3-row-padding" id="plans">
      <div class="w3-third w3-margin-bottom">
        <img src="img/diagnosa.png" width="280" height="530">
      </div>
      <div class="w3-third w3-margin-bottom">
        <img src="img/space.png" width="280" height="530">
      </div>
      <div class="w3-third w3-margin-bottom">
        <img src="img/skos.png" width="280" height="530">
      </div>
    </div>
  </div>
</div>

<!-- Download -->
<div class="w3-content w3-container w3-padding-64" id="download">
  <!-- <h3 class="w3-center">DEFINITION</h3>
  <p class="w3-center"><em>I love photography</em></p> -->
  <div class="w3-row">
    <div class="w3-col m6 w3-padding-large">
      <font class="flarge w3-right"> Where can you get it?</font>
    </div>
    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-small w3-padding-large">
      <h3><b>Get for Android</b></h3>
      <p style="font-size:12pt">
        Hi-Depok merupakan wujud peningkatan pelayanan pemerintah Kota Depok kepada warganya. Aplikasi ini dapat membantu warga Kota Depok dalam berbagai aspek pelayanan seperti pelayanan kesehatan, keamanan, sosial dan juga kebutuhan akan informasi.
      </p>
      <img src="img/gplay.png" class="w3-round w3-image" alt="Get for Android" width="150" height="333">
    </div>
  </div>
</div>


<div class="w3-row w3-center w3-cyan">
  <hr style="margin: 10px 0px 40px;">
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

<!-- Add Google Maps -->
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
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
</script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
    }
    </script>

</body>
</html>
