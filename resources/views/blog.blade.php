<!DOCTYPE html>
<html>
<title>Blog | Hi-Depok</title>
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



.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
.pagination li{
    display: inline;
}
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
      <a href="/" class="w3-bar-item w3-button">Download</a>
      <a href="/maps" class="w3-bar-item w3-button">Maps</a>
      <a href="/blog" class="w3-bar-item w3-button">Blog</a>
      <!-- <a href="/opendata" class="w3-bar-item w3-button">OpenData</a> -->
      <a href="/event" class="w3-bar-item w3-button">Event</a>
      <a href="/" class="w3-bar-item w3-button">About</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
    <a href="/maps.php" class="w3-bar-item w3-button">Maps</a>
    <a href="/blog.php" class="w3-bar-item w3-button">Blog</a>
    <!-- <a href="/opendata" class="w3-bar-item w3-button">OpenData</a> -->
    <a href="/event.php" class="w3-bar-item w3-button">Event</a>
    <a href="/" class="w3-bar-item w3-button">About</a>
  </div>
</div>

<div style="width:100%; ">

  <!-- <header class="w3-container w3-center w3-padding-64 w3-white" style>
    <h1 class="f_bold w3-xxlarge"><b>BLOG</b></h1>
    <h6>Mari lihat apa yang terjadi di Kota Depok</h6>
    </div>
  </header> -->

  <!-- Slideshow -->
  @foreach($artikels as $artikel)
  <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:650px;">
      <img src="{{ asset ("storage/upload/iblogs/$artikel->image") }}" style="position:absolute; width:100%; height:650px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff; margin-bottom:7px">
        <label class="f_bold w3-wide w3-xxxlarge label_header w3-text-white"><b> BLOG </b></label>
      </div>
      <p class="f_reg w3-text-white" style="margin:0;"> Mari lihat apa yang terjadi di Kota Depok </p>
    </div>
    <div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small" style="left:2%">
      <h3 class="f_reg w3-xxlarge"><b><a href="/hidepok/blog/{{ $artikel->id_blog }}"> {{ $artikel->judul }}<a></b></h3>
    </div>
  </div>
  @endforeach
<!--   <div class="mySlides w3-display-container w3-center">
    <div style="background-color:#000; position:relative; width:100%;height:650px;">
      <img src="{{ URL::asset('img/slideblog_3.jpg') }}" style="position:absolute; width:100%; height:650px; left:0; opacity:0.4">
    </div>
    <div class="w3-content w3-display-middle" style="white-space:nowrap; opacity:0.5">
      <div style="border:5px solid #fff; margin-bottom:7px">
        <label class="f_bold w3-wide w3-xxxlarge label_header w3-text-white"><b> BLOG </b></label>
      </div>
      <p class="f_reg w3-text-white" style="margin:0;"> Mari lihat apa yang terjadi di Kota Depok </p>
    </div>
    <div class="w3-display-bottomleft w3-container w3-text-white w3-padding-32 w3-hide-small" style="left:2%">
      <h3 class="f_reg w3-xxlarge"><b>Pemerintah Terjun Langsung Membantu Warga</b></h3>
    </div>
  </div> -->

  <!-- Isi Blog -->
  <div class="w3-row w3-white w3-padding-48">

    <div class="w3-col l8 s12">
      <!-- Blog entry 1 & 2 -->
      @foreach($blogs as $blog)
      <div class="w3-container black w3-padding-large w3-col 18 m12">
        <div class="w3-container w3-white w3-padding-large w3-col 18 m6">
          <div class="w3-justify">
            <img src="{{ asset ("storage/upload/iblogs/$blog->image") }}" style="width:100%;height:300px" class="w3-padding-16">
            <p><h3>{{ $blog->judul }}</h3></p>
            <!-- <p class="w3-text-grey">{{ $blog->isi }}</p> -->
          </div>
          <div class="w3-button w3-cyan w3-text-white" style="width:100%"><a href="/hidepok/blog/{{ $blog->id_blog }}"> Selengkapnya </a></div>
        </div>
<!--         <div class="w3-container w3-white w3-padding-large w3-col 18 m6">
          <div class="w3-justify">
            <img src="{{ URL::asset('img/blog6.jpg') }}" style="width:100%;height:300px" class="w3-padding-16">
            <h3>Pasar Sukatani Akan Jadi Binaan Lembaga Pangan Internasional</h3>
            <p class="w3-text-grey">Kasubag TU Pasar Sukatani (kanan) saat berkunjung ke Kantor FAO ECTAD di Kementerian Pertanian RI, baru-baru ini. (Foto : Istimewa/Diskominfo) depok.go.id - Predikat Standar Nasional Indonesia (SNI) yang dimiliki Pasar...</p>
          </div>
          <div class="w3-button w3-cyan w3-text-white" style="width:100%"> Selengkapnya </div>
        </div> -->
      </div>
      @endforeach
      <!-- Blog entry 3 & 4 -->
<!--       <div class="w3-container black w3-padding-large w3-col 18 m12">
        <div class="w3-container w3-white w3-padding-large w3-col 18 m6">
          <div class="w3-justify">
            <img src="{{ URL::asset('img/blog8.jpg') }}" style="width:100%;height:300px" class="w3-padding-16">
            <p><h3>Pancoran Mas Perkuat Kualitas SDM RW Ramah Anak</h3></p>
            <p>Camat Pancoran Mas, Utang Wardaya. (Foto : Nurul/Diskominfo) depok.go.id - Kecamatan Pancoran Mas saat ini sudah memiliki 5 RW Ramah Anak yang tersebar di 5 kelurahan. Untuk menguatkan keberadaan RW Ramah...</p>
          </div>
          <div class="w3-button w3-cyan w3-text-white" style="width:100%"> Selengkapnya </div>
        </div>
        <div class="w3-container w3-white w3-padding-large w3-col 18 m6">
          <div class="w3-justify">
            <img src="{{ URL::asset('img/blog7.jpg') }}" style="width:100%;height:300px" class="w3-padding-16">
            <h3>Bersaing di Tingkat Nasional, Depok Dibina DKPP Jabar</h3>
            <p>Kota Depok yang telah sukses menggondol juara satu Lomba Cipta Menu (LCM) Beragam, Bergizi, Seimbang, dan Aman tingkat Provinsi Jawa Barat akan melaju pada tingkat nasional. Untuk menghadapi perhelatan akbar...</p>
          </div>
          <div class="w3-button w3-cyan w3-text-white" style="width:100%"> Selengkapnya </div>
        </div>
      </div> -->
  
      <!-- Pagination -->
<!--     <div class="centerpagination w3-margin-bottom w3-margin-top">
      <div class="pagination">
        <button class="w3-button w3-dark-gray w3-round-large" onclick="myFunction('demo1')" id="myBtn"><b>SEE MORE ARTICLES </b></button>
      </div>
    </div> -->
    {{$blogs->links()}}

    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">

      <!-- Posts -->
      <div class="w3-white w3-margin" style="border:3px solid black">
        <div class="w3-container w3-padding w3-white">
          <h1>POPULAR POSTS</h1>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <span>Roadshow Sosialisasi Bahaya Narkoba dan HIV/AIDS</span>
          </li>
          <li class="w3-padding-16">
            <span>Kelurahan Abadijaya Miliki 13 Katar Unit RW</span>
          </li>
          <li class="w3-padding-16">
            <span>Sasar Pelajar, BNN Gencar Sosialisasi Bahaya Narkoba, HIV dan AIDS</span>
          </li>
          <li class="w3-padding-16">
            <span>Satpol PP-Panwaslu Akan Tertibkan APK Pilgub Jabar</span>
          </li>
          <li class="w3-padding-16">
            <span>DWP Diajak Sukseskan Program Pemkot Depok</span>
          </li>
          <li class="w3-padding-16">
            <span>Bersaing di Tingkat Nasional, Depok Dibina DKPP Jabar </span>
          </li>
          <li class="w3-padding-16">
            <span>Peringatan HUT DPRD Kota Depok Ke-18</span>
          </li>
          <li class="w3-padding-16">
            <span>Pembukaan Masa Sidang Tahun Sidang 2017-2018 DPRD Kota Depok</span>
          </li>
        </ul>
      </div>


      <!-- Advertising -->
      <div class="w3-white w3-margin" style="border:3px solid black">
        <div class="w3-container w3-padding w3-white">
          <h4>Advertise</h4>
        </div>
        <div class="w3-container w3-white">
          <div class="w3-container w3-display-container w3-light-grey w3-section" style="height:200px">
            <span class="w3-display-middle">Your AD Here</span>
          </div>
        </div>
      </div>

      <!-- Subscribe -->
      <div class="w3-white w3-margin" style="border:3px solid black">
        <div class="w3-container w3-padding w3-white">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-cyan w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
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
      <a href="/" class="w3-bar-item w3-hover-text-white" style="text-decoration:none" onclick="toggleFunction()">Home</a>
      <a href="/#download" class="w3-bar-item w3-hover-text-white" style="text-decoration:none;padding: 0em 1.7em;" onclick="toggleFunction()">Download</a>
      <a href="/hidepok/blog" class="w3-bar-item w3-hover-text-white" style="text-decoration:none">About</a>
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
