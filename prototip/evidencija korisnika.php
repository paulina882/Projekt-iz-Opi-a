<html>
<style type="text/css">

*{
	margin:0px;
	padding=0;
	}
body{
	background-image:url(pozadina.jpg);};
	background-size:100% 100%;
	background-attachment:fixed;
	background-repeat: no-repeat;
	font-family:sans-serif;
	margin 5px 10px 10px 10px;
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
h1{
  text-align: center;
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:800px;
	height:650px;
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
.lastname{
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
.email{
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

</style>

<head>
	<meta charset= 'UTF-8' /> 
	<title> Evidencija korisnik </title> 
</head>

<body>
<form action="pocetna.php">
		<button type="submit">Natrag</button>
                    
</form>
<form action="pregledk.php">
	<input type="submit" name="pregled" value="Pregled korisnika">
</form>
<div class="regform"><h1>Unos novog korisnika</h1></div>
<div class="main">
	<form action="unosk.php" method="POST">
	
	<h2 class="name">ID</h2>
	<input class="ID" type="text" name="id"><br>
	
	<h2 class="name">Ime</h2>
	<input class="firstname" type="text" name="first_name"><br>
	
	<h2 class="name">Prezime</h2>
	<input class="lastname" type="text" name="last_name"><br>
		
	<h2 class="name">Šifra odjel</h2>
	<input class="company" type="text" name="company">
	
	<h2 class="name">Email</h2>
	<input class="email" type="text" name="email">
		
	<h2 class="name">Uloga</h2>
	<select class="option" name="subject">
	<option disabled="disabled" selected="selected">Izaberi opciju</option>
	<option>Administrator</option>
	<option>Nastavnik</option>
	<option>Gost</option>
	</select>
	
	<input type="submit" name="unos" value="Unos">
	
	</form>	
	
</div>
			
</body>
</html>

