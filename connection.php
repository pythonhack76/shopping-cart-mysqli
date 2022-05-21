<?php 

//dati per la connessione 
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "";


//creo la connessione 
$con = mysqli_connect($servername, $username, $password, $dbname);
//controllo la connessione
if(!$conn){
    die ("Errore con la connessione: " . mysqli_connect_error());
}

mysqli_close($con);


?>