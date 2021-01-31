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
	margin:10px 0px 0px 20px;
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
    <title>Brisanje korisnika</title>
    <meta charset="UTF-8">
    
</head>

<body>
<?php

	
	$sql = "DELETE FROM korisnik WHERE id=".$_GET["a"].";";
	if($link->query($sql)===TRUE){
        echo "Uspješno ste izbrisali.";
    } else{
        echo "ERROR: Could not able to execute ".$sql."<br>".$link->error;
    }

$link->close();
?>

 <form action="pregledk.php">
        <input type="submit" value="Natrag" class="button">
        </form>
		
</body>

</html>