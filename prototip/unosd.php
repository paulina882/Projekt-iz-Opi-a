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
	background-color:lightgrey;
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
    <title>Unos dvorana</title>
    <meta charset="UTF-8">
    
</head>

<body>
<?php

if(isset($_POST['unos'])){
    $id=mysqli_real_escape_string($link, $_POST['id']);
    $naziv=mysqli_real_escape_string($link, $_POST['first_name']);
    $sifodjel=mysqli_real_escape_string($link, $_POST['company']);
    $kapacitet=mysqli_real_escape_string($link, $_POST['kapacitet']);
    $tip=mysqli_real_escape_string($link, $_POST['subject']);
    
    

    $sql = "INSERT INTO dvorana (id, naziv, sifodjel, kapacitet, tip)
    VALUES ('$id','$naziv','$sifodjel','$kapacitet','$tip')";
    
    if($link->query($sql)===TRUE){
        echo "Uspješno ste unjeli.";
    } else{
        echo "ERROR: Could not able to execute ".$sql."<br>".$link->error;
    }
}


$link->close();
?>

<form action="evidencija dvorana.php">
	<input type="submit" name="natrag" value="natrag">
	</form>

    
</body>

</html>
    