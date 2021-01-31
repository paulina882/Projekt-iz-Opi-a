<html>
<style type="text/css">

*{
	margin:0;
	padding=0;
	}
body{
	background-image:url(pozadina.jpg);
	background-size:cover;
	font-family:sans-serif;
	margin-top:5px;
	}
.regform{
	width:800px
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:black;
	padding: 10px 0px 10px Opx;
	text-align:center;
	border-radius: 15px 15px 0px 0px;
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:800px;
	margin:auto;
}
form{
	padding:10px;
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
	font-size:20px;
	font-weight:700;
}
.ID{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}
.firstname{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
}

.firstlabel{
	position:relative;
	color:#E5E5E5;
	text-transform:capitalize;
	font-size:14px;
	left:203px;
	top:-45px;
}
.lastlabel{
	position:relative;
	color:#E5E5E5;
	text-transform:capitalize;
	font-size:14px;
	left:456px;
	top:-76px;
}
.company{
	position:relative;
	left:200px;
	top:-37;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size: 16px;
	color:#555;
}
.kapacitet{
	position:relative;
	left:200px;
	top:-37;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size: 16px;
	color:#555;
	height:45px;
}

.option{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	height:45px;
	border-radius:6px;
	padding:0 22px;
	font-size: 16px;
	color:#555
	outline:none;
    overflow:hidden;	
}
.option option{
	font-size:20px;
}
button{
	background-color:#3BAF9F;
	display:block;
	margin:0px 0px 0px 0px;
	text-align:center;
	border-radius:12px;
	border:2px solid #366473;
	padding:14px 35px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
	}
button:hover{
			background-color:#5390F5;
}
input[type=button], input[type=submit], input[type=reset] {
	
	background-color:#3BAF9F;
	display:block;
	margin:0px 0px 0px 0px;
	text-align:center;
	border-radius:12px;
	border:2px solid #366473;
	padding:14px 35px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
}

</style>

<head>
	<meta charset= 'UTF-8' /> 
	<title> Evidencija dvorana </title> 
</head>

<body>
 <form action="pocetna.php">
		<button type="submit">Natrag</button>
                    
  </form>
  <form action="pregledd.php">
	<input type="submit" name="pregled" value="Pregled dvorana">
</form>
<div class="regform"><h1>Unos nove dvorane</h1></div>
<div class="main">
	<form action="unosd.php" method="POST">
	
	<h2 class="name">ID</h2>
	<input class="ID" type="rext" name="id"><br>
	
	<h2 class="name">Naziv</h2>
	<input class="firstname" type="rext" name="first_name"><br>
	
	<h2 class="name">Šifra odjel</h2>
	<input class="company" type="rext" name="company">
	
	<h2 class="name">Kapacitet</h2>
	<input class="kapacitet" type="rext" name="kapacitet">
		
	<h2 class="name">Tip dvorana</h2>
	<select class="option" name="subject">
	<option disabled="disabled" selected="selected">Izaberi opciju</option>
	<option>Računalna dvorana</option>
	<option>Dvorana s laboratorijem</option>
	<option>Dvorana s laboratorijem i projektorom</option>
	<option>Dvorana s projektorom</option>
	<option>Dvorana bez dodatne opreme</option>
	<option>Dvorana za sve</option>
	</select>
	
	<input type="submit" name="unos" value="Unos">
	
	
	
	</form>
</div>
			
</body>
</html>
