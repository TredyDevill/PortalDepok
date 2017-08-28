<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="img/logoopendata.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</head>
<body>
  <div id="app">
        @include('layouts.navbar')
          @yield('content')
    </div>
</body>
</html>
