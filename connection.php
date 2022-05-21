<?php 

//dati per la connessione 
$username = "root";
$password = "root";
$servername = "localhost";
$dbname = "ecommerce-dress";


//creo la connessione 
$con = mysqli_connect($servername, $username, $password, $dbname);
//controllo la connessione
if(!$con){
    die ("Errore con la connessione: " . mysqli_connect_error());
}

mysqli_close($con);


?>