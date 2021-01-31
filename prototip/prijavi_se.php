<?php
//spajanje
$servername="localhost";
$ime="root";
$lozinka="";

$con=new mysqli($servername, $ime, $lozinka, "bazaP");
if($con->connect_error){
    die("Došlo je do pogreške!".$con->connect_error);
}


$korisnickoIme=mysqli_real_escape_string($con, $_POST["korisnickoIme"]);
$lozinka=mysqli_real_escape_string($con, $_POST["lozinka"]);
$sql="SELECT * FROM prijava WHERE korisnickoIme='".$korisnickoIme."' AND lozinka='".$lozinka."';";
$result=mysqli_query($con, $sql);
$rowcount=mysqli_num_rows($result);
if ($rowcount!=1){
    header("Location:pogresna_lozinka.php");
    die();
}
else{
    //session_start();
    //$_SESSION["login"]="true";
    header("Location:pocetna.php");
    die();
}

?>