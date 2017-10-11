<!DOCTYPE html>
<html>
<head>
	<title>Blog | {{ $blog->judul }}</title>
</head>
<body>
	<center><img src="{{ asset ("storage/upload/iblogs/$blog->image") }}" style="width:35%;height:300px" class="w3-padding-16"></center>
  <center><h1>{{ $blog -> judul }}</h1></center>
  <hr>
  <p>
    {{ $blog->isi }}
  </p>
</body>
</html>