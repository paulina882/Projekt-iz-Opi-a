<!DOCTYPE html>
<html>
<head>
<style>

body{
	
background-color: lightgrey;}

.prijava{
	
	border-radius:12px;
    box-sizing: content-box;  
    width: 450px;
    height: 250px;
    padding: 30px; 
    border: medium grey;
    background-color:rgb(0,0,0,0.5);
	position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.korisnickoIme{
	position:relative;
	left:150px;
	top:-50px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:17px;
	color:#555;
}
.lozinka{
	position:relative;
	left:150px;
	top:-50px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:17px;
	color:#555;
}
button{
	background-color:#3BAF9F;
	display:block;
	margin:0px 0px 0px 0px;
	text-align:center;
	border-radius:10px;
	border:0px solid #366473;
	padding:10px 35px;
	outline:none;
	color:white;
	cursor:pointer;
	transition:0.25px;
	}
button:hover{
			background-color:#5390F5;
}


</style></head>
<body>
<h1>Informacijski sustav za rezervaciju dvorana </h3> 
<br/>
<div class="prijava">
<form action="prijavi_se.php" method="post">

	<h3 class="name">Korisnicko Ime</h3>
	<input class="korisnickoIme" type="rext" name="korisnickoIme" required><br>
	
	<h3 class="name">Lozinka</h3>
	<input class="lozinka" type="password" name="lozinka"><br>

	<button type="submit">Prijavi se</button>

</form>
</div>