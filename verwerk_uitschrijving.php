<?php
// FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['mailadres'];
// CONNECTIE MAKEN MET DE DATABASE
$host     = 'localhost';
$username = 'arthur';
$password = '12435';
$dbname   = 'arthur_db';

$dbc = mysqli_connect($host,$username,$password,$dbname) or die ('Error connecting');
echo 'Connectie geslaagd';
// QUERY BEDENKEN
$query = "SELECT * FROM nieuwsbrief_tutorial WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying');
echo 'Query geslaagd!';
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result) or die ('Error counting.');
echo 'Tellen geslaagd, namelijk: ' . $number_of_rows . '<br>';
// CONNECTIE VERBREKEN

// VERSLAG DOEN VAN HET RESULTAAT