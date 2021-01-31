<html>
<style>


*{
	margin:20;
	padding=0;
	}
.main{
	
	width:800px;
	margin:auto;
}
form{
	padding:5px;
}
#name{
	width:100%;
	height:100px;
}
.name{
	margin-left:25px;
	margin-top:30px;
	width:125px:
	color:white;
	font-size:18px;
	font-weight:700;
}
a:link, a:visited {
  position:relative;
  left:200px;
  top:50;
  background-color:rgb(0,0,0,0.6);
  color: black;
  border: 2px solid lightgrey;
  border-radius:12px;
  padding: 30px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
h1{
  text-align: center;
}
button{
	background-color:#3BAF9F;
	display:block;
	margin:0px 0px 0px 0px;
	text-align:center;
	border-radius:12px;
	border:2px solid grey;
	padding:14px 35px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
	}
button:hover{
			background-color:#5390F5;
}

a:hover, a:active {
  background-color: grey;
  color: black;
}
body{
	background-image:url(pozadina.jpg);
	background-size:cover;
	font-family:sans-serif;
	margin-top:5px;}
</style>

<head>
	<meta charset= 'UTF-8' /> 
	<title> Glavno sučelje </title> 
</head>

<body>
<form action="prijava.php">
		<button type="submit">Odjava</button>
<div class="main">
<form>
<h1><strong> Informacijski sustav za evidenciju dvorana</strong></h1>
	<a href="evidencija korisnika.php"><h1>Evidencija korisnik</h1></a><br/>
	<a href="evidencija dvorana.php"><h1>Evidencija dvorana</h1></a>

</form>
</div>
</body>

</html>