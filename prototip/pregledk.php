<?php
$servername="localhost";
$username="root";
$password="";
$database="bazap";

$link = mysqli_connect($servername, $username, $password, $database);

if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}
?>
<html>
<style>

h1{
  text-align: center;
}
table {
  width: 80%;
  text-align:center;
  margin:70px 0px 5px 130px;
  font-size: 18px;
}
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
input[type=button], input[type=submit], input[type=reset] {
	
	background-color:#3BAF9F;
	display:block;
	margin:0px 0px 0px 20px;
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
    <title>Pregled korisnika</title>
    <meta charset="UTF-8">
    
</head>

<body>
<form action="evidencija korisnika.php">
        <input type="submit" value="Natrag" class="button">
        </form>
<h1>Pregled korisnika</h1>
<?php
	$sql ="SELECT * FROM korisnik;";
	$result = mysqli_query($link, $sql); ?>
	
	<table width="50%" height="30%" border="3">
         <tr>
            <td><b>ID</b></td>
            <td><b>Ime</b></td>
            <td><b>Prezime</b></td>
            <td><b>Šifra odjel</b></td>
            <td><b>Email</b></td>
            <td><b>Uloga</b></td>
            <td><b>Izbriši korisnika</b></td>
            
         </tr>
<?php
	if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { ?>
                
                    <tr>
                        <td><?=$row["id"];?></td>
                        <td><?=$row["ime"];?></td>
                        <td><?=$row["prezime"];?></td>
                        <td><?=$row["sifodjel"];?></td>
                        <td><?=$row["email"];?></td>
                        <td><?=$row["uloga"];?></td>
                        <td><a href="brisanjek.php?a=<?=$row['id']?>">Izbriši</a></td>
                        
                    </tr>
<?php    }
    } ?>
    </table><br/><br/>
        

    
</body>

</html>