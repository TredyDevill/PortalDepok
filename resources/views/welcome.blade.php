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
    background-image: url('img/bg3.png');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img/bg2.jpg");
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img/pattern.jpg");
    min-height: 400px;
}
.label_header {
  letter-spacing: 10px;
  font-size: 47px;
}
.flarge {
  font-size: 40pt;
  text-align: right;
}
.w3-bar {
    padding: 1em 2em;
}
.bottom-img {
  margin-bottom:-83%;
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
    font-size: 25px;
  }
  .bottom-img {
    margin-bottom:-32%;
  }
}
.loader,
.loader:before,
.loader:after {
      border-radius: 50%;
      width: 2.5em;
      height: 2.5em;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation: load7 1.8s infinite ease-in-out;
      animation: load7 1.8s infinite ease-in-out;
      }
.loader {
      color: #FF1000;
      font-size: 10px;
      margin: 80px auto;
      position: relative;
      text-indent: -9999em;
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      transform: translateZ(0);
      -webkit-animation-delay: -0.16s;
      animation-delay: -0.16s;
      }
.loader:before,
.loader:after {
      content: '';
      position: absolute;
      top: 0;
      }
.loader:before {
      left: -3.5em;
      -webkit-animation-delay: -0.32s;
      animation-delay: -0.32s;
      }
.loader:after {
      left: 3.5em;
      }
@-webkit-keyframes load7 {
      0%,
      80%,
      100% {
        box-shadow: 0 2.5em 0 -1.3em;
      }
      40% {
        box-shadow: 0 2.5em 0 0;
      }
    }
@keyframes load7 {
      0%,
      80%,
      100% {
        box-shadow: 0 2.5em 0 -1.3em;
      }
      40% {
        box-shadow: 0 2.5em 0 0;
        }
      }
#loadingDiv {
      position:absolute;;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background-color:#ffffff;
      }
</style>
  <script>

  <!----- JQUERY FOR SLIDING NAVIGATION --->
  $(document).ready(function() {
    $('a[href*=#]').each(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
      && location.hostname == this.hostname
      && this.hash.replace(/#/,'') ) {
        var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
        var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
         if ($target) {
           var targetOffset = $target.offset().top;

  <!----- JQUERY CLICK FUNCTION REMOVE AND ADD CLASS "ACTIVE" + SCROLL TO THE #DIV--->
           $(this).click(function() {
              $("#nav li a").removeClass("active");
              $(this).addClass('active');
             $('html, body').animate({scrollTop: targetOffset}, 1000);
             return false;
           });
        }
      }
    });

  });
  </script>

    <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      });
    </script>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-text-black" id="myNavbar">
    <a class="w3-text-white w3-display-right w3-bar-item w3-hover-text-gray w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu" style="margin-right:3em">
      <i class="fa fa-bars"></i>
    </a>
    <div class="w3-bar-item" style="letter-spacing: 5px; font-size:15pt">
      <img src="{{ URL::asset('img/minilogo.png') }}" style="width:50px; height:50px">
      <b class="w3-display-left" style="margin-left:5.5em">HI-DEPOK</b>
    </div>
    <div class="w3-right w3-hide-small w3-display-right" style="margin-right:3em">
      <a href="#download" class="w3-bar-item w3-button">Download</a>
      <a href="hidepok/maps" class="w3-bar-item w3-button">Maps</a>
      <a href="hidepok/blog" class="w3-bar-item w3-button">Blog</a>
      <a href="hidepok/event" class="w3-bar-item w3-button">Event</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#download" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
    <a href="link/maps1.php" class="w3-bar-item w3-button">Maps</a>
    <a href="link/blog.php" class="w3-bar-item w3-button">Blog</a>
    <a href="link/event.php" class="w3-bar-item w3-button">Event</a>
    <a href="#about" class="w3-bar-item w3-button">About</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-content w3-display-middle" style="white-space:nowrap;">
    <div class="w3-pale-yellow w3-animate-zoom" style="padding: 0em 2em">
      <label class="label_header w3-text-cyan"><b> WE SHARE WE CARE </b></label>
    </div>
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
  </div>
  <div class="w3-display-bottommiddle" style="width:100%; margin-bottom:-3px">
    <img src="{{ URL::asset('img/cloud.png') }}" style="width:100%">
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

<!-- Blog -->
<div class="w3-container w3-padding-64" style="padding:0px;">
  <h3 class="w3-center" style="letter-spacing:5px">BLOG</h3>
  <p class="w3-center"><em>Mari lihat apa yang terjadi pada Kota Depok</em></p><br>
  <div class="w3-content w3-row" style="max-width:1200px">
    <div class="w3-container w3-third">
      <div class="w3-display-container w3-hover-opacity">
        <img class="w3-grayscale" src="{{ URL::asset('img/blog1.png') }}" alt="Avatar" style="width:100%; height:400px;">
        <div class="w3-display-topmiddle w3-display-hover" style="margin-top:45px">
          <img src="{{ URL::asset('img/logodsc.png') }}" style="width:160px; height:110px">
        </div>
        <div class="w3-display-bottommiddle w3-display-hover w3-medium" style="margin-bottom:3px; width:100%">
          <header class="w3-padding w3-light-grey">
            <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
          </header>
          <div class="w3-padding w3-white">
            Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
          </div>
          <button class="w3-button w3-block w3-cyan w3-text-white">See More </button>
        </div>
      </div>
    </div>
    <div class="w3-container w3-third">
      <div class="w3-display-container w3-hover-opacity">
        <img class="w3-grayscale" src="{{ URL::asset('img/blog2.png') }}" alt="Avatar" style="width:100%; height:400px;">
        <div class="w3-display-topmiddle w3-display-hover" style="margin-top:45px">
          <img src="{{ URL::asset('img/logodsc.png') }}" style="width:160px; height:110px">
        </div>
        <div class="w3-display-bottommiddle w3-display-hover w3-medium" style="margin-bottom:3px; width:100%">
          <header class="w3-padding w3-light-grey">
            <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
          </header>
          <div class="w3-padding w3-white">
            Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
          </div>
          <button class="w3-button w3-block w3-cyan w3-text-white">See More </button>
        </div>
      </div>
    </div>
    <div class="w3-container w3-third">
      <div class="w3-display-container w3-hover-opacity">
        <img class="w3-grayscale" src="{{ URL::asset('img/blog3.png') }}" alt="Avatar" style="width:100%; height:400px;">
        <div class="w3-display-topmiddle w3-display-hover" style="margin-top:45px">
          <img src="{{ URL::asset('img/logodsc.png') }}" style="width:160px; height:110px">
        </div>
        <div class="w3-display-bottommiddle w3-display-hover w3-medium" style="margin-bottom:3px; width:100%">
          <header class="w3-padding w3-light-grey">
            <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
          </header>
          <div class="w3-padding w3-white">
            Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
          </div>
          <button class="w3-button w3-block w3-cyan w3-text-white">See More </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bgimg-2 w3-padding-32 w3-opacity">
  <h3 class="w3-center w3-padding-64 w3-xx  large w3-text-black" style="letter-spacing:5px"><b>EVENT</b></h3>
</div>

<div class="w3-container w3-padding-32">
  <div class="w3-content w3-center" style="max-width:1000px">
      <div class="w3-row"><br>
        <div class=" w3-container w3-quarter">
          <img src="{{ URL::asset('img/event1.jpg') }}" alt="Boss" style="width:175px; height:175px; border:7px solid #36a0a0" class="w3-circle w3-hover-opacity">
          <h3>Johnny Walker</h3>
          <p>Web Designer</p>
        </div>
        <div class="w3-container w3-quarter">
          <img src="{{ URL::asset('img/event2.jpg') }}" alt="Boss" style="width:175px; height:175px; border:7px solid #36a0a0" class="w3-circle w3-hover-opacity">
          <h3>Rebecca Flex</h3>
          <p>Support</p>
        </div>
        <div class="w3-container w3-quarter">
          <img src="{{ URL::asset('img/event3.png') }}" alt="Boss" style="width:175px; height:175px; border:7px solid #36a0a0" class="w3-circle w3-hover-opacity">
          <h3>Jan Ringo</h3>
          <p>Boss man</p>
        </div>
        <div class="w3-container w3-quarter">
          <img src="{{ URL::asset('img/event4.jpg') }}" alt="Boss" style="width:175px; height:175px; border:7px solid #36a0a0" class="w3-circle w3-hover-opacity">
          <h3>Kai Ringo</h3>
          <p>Fixer</p>
        </div>
      </div>
    </div>
</div>

 <!-- Portal Section-->
  <div class="bgimg-3 w3-container w3-text-dark-gray" id="band" style="margin-bottom:10em;">
    <div class="w3-row w3-content w3-padding-32" style="max-width:1100px">
      <div class="w3-half w3-text-dark-gray w3-padding-32" style="padding-left:3em ;padding-right:3em">
        <h4><b>DEPOK OPEN DATA</b></h4>
        <font class="w3-justify"> Merupakan Portal Data Terpadu Pemerintah Kota Depok yang menyajikan data-data dari seluruh Unit Kerja di Pemerintah dan Seluruh Instansi serta Organisasi Kota Depok. </font>
        <br><br>
        <a href= "/opendata">
        <button class="w3-btn w3-dark-gray w3-padding-large">See More</button><br><br>
        </a>
      </div>
      <div class="w3-half w3-center">
        <img class="bottom-img" src="{{ URL::asset('img/b3.png') }}" style="width:100%;">
      </div>
    </div>
  </div>

<!-- Fitur -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center" style="letter-spacing:5px">FEATURES</h3>
  <p class="w3-center"><em>The great features of Hi-Depok</em></p><br>

  <div class="w3-content w3-center w3-display-container">
    <div class="w3-display-container mySlides">
      <img src="{{ URL::asset('img/fitur1.png') }}" style="width:510px">
    </div>

    <div class="w3-display-container mySlides">
      <img src="{{ URL::asset('img/fitur2.png') }}" style="width:510px">
    </div>

    <div class="w3-display-container mySlides">
      <img src="{{ URL::asset('img/fitur3.png') }}" style="width:510px">
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
    SEARCH DATA
  </h3>
  <div class="w3-content" style="max-width:1000px;">
    <div class="w3-row-padding" id="plans">
      <div class="w3-third w3-margin-bottom">
        <img src="{{ URL::asset('img/diagnosa.png') }}" width="280" height="530">
      </div>
      <div class="w3-third w3-margin-bottom">
        <img src="img/space.png" width="280" height="530">
      </div>
      <div class="w3-third w3-margin-bottom">
        <img src="{{ URL::asset('img/skos.png') }}" width="280" height="530">
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
      <img src="{{ URL::asset('img/gplay.png') }}" class="w3-round w3-image" alt="Get for Android" width="150" height="333">
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

<!-- Add Google Maps -->
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
//script untuk page loading
$('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
setTimeout(removeLoader, 500); //wait for page load PLUS two seconds.
});
function removeLoader(){
$( "#loadingDiv" ).fadeOut(500, function() {
// fadeOut complete. Remove the loading div
$( "#loadingDiv" ).remove(); //makes page more lightweight
});
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-black" + " w3-text-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-black w3-text-white", "");
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
