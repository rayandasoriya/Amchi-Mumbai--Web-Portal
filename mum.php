<?php
   include('session.php');
?>
<!doctype html>
<html>
<head>
<title>Mumbai</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {
font-family: Arial, Helmet, Freesans, sans-serif;
margin:0;
line-height:16px;
link:#ffffff;
}
#mumb-logo {
float:left;
height:46px;
}
#mumb-logo img {
margin:0px 0px 0px;
width:400px;
height:250px;
}
#title-bar {
	margin-top: -50px;
background-color:#990000;
width:100%;
height:250px;
}

#side-bar{
	background-color:#311141;
	width:400px;
	height: 1100px;
}

ul{
	list-style-type: circle;
}
/* unvisited link */
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: #FFA500;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}

#news1{
	margin-left: 50px;
	position: absolute;
	top: 300px;
	color:#ffffff;
}
#news2{
	margin-left: 50px;
	position: absolute;
	top:340px;
	color:white;
}

#news3{
	margin-left: 50px;
	position: absolute;
	top:380px;
	color:white;
}
#news4{
	margin-left: 50px;
	position: absolute;
	top: 420px;
	color:white;
}
#news5{
	margin-left: 50px;
	position: absolute;
	top: 460px;
	color:white;
}
#news6{
	margin-left: 50px;
	position: absolute;
	top: 500px;
	color:white;
}

h1{
	padding-top: 100px;
	color: white;
	font-size: 50px;
	padding-left:450px;
	text-decoration:underline;
}

</style>
</head>

<body>

<div id="title-bar">

<h5><a href = "logout.php"  style="float:right;margin-bottom:100px; ">Sign Out</a></h5>	
	<div id="mumb-logo">
	<img src="mum.jpg" />
	
	</div>

	<input type="text" placeholder="Search" />
	<h5><a href = "logout.php"  style="float:right;margin-bottom:100px; ">Sign Out</a></h5>
	<input id="textbox" type="text" placeholder="Search on Google..." style="margin-left: 1000px" onkeydown="if (event.keyCode == 13 || event.which == 13) { location='http://www.google.com/search?q=' + encodeURIComponent(document.getElementById('textbox').value);}" />
	<h1>WELCOME TO MUMBAI</h1>


	<div id="side-bar">	
	<ul>
	<li id="news1">
	<a href="andheri.html">Andheri</a>
	</li>
	<li id="news2">
	<a href="bandra.html">Bandra</a>
	</li>
	<li id="news3">
	<a href="borivali.html">Borivali</a>
	</li>
	<li id="news4">
	<a href="churchgate.html">Churchgate</a>
	</li>
	<li id="news5">
	<a href="juhu.html">Juhu</a>
	</li>
	<li id="news6">
	<a href="lp.html" >Lower Parel</a>
	</li>
	</ul>
</div>
</div>
<div>
	<a href="restaurants.html">
	<img src="rest.jpg" style="width:230px;height:230px;float:left;margin-left:500px;margin-top:100px" /></a>
	<a href="malls.html">
	<img src="malls.jpg" style="width:230px;height:230px;float:left;margin-left:200px;margin-top:100px" /></a>
	<a href="cafe.html">
	<img src="cafe.jpeg" style="width:230px;height:230px;float:left;margin-left:200px;margin-top:100px" /></a>
	<a href="club.html">
	<img src="club.jpg" style="width:230px;height:230px;float:left;margin-left:500px;margin-top:100px" /></a>
	<a href="movie.html">
	<img src="movie.jpg" style="width:230px;height:230px;float:left;margin-left:200px;margin-top:100px" /></a>
	<a href="sight.html">
	<img src="sight.jpg" style="width:230px;height:230px;float:left;margin-left:200px;margin-top:100px" /></a>
	<a href="hotel.html">
	<img src="hotel.jpg" style="width:230px;height:230px;float:left;margin-left:930px;margin-top:100px" /></a>

</div>

</body>


</html>