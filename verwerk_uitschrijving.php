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
// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT * FROM nieuwsbrief_tutorial WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying');
echo 'Query geslaagd!';
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result) or die ('Error counting.');
echo 'Tellen geslaagd, namelijk: ' . $number_of_rows . '<br>';
// TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIES AAN VERBINDEN
if ($number_of_rows == 0) {
    echo 'Helaas, het mailadres ' . $mailadres . ' staat niet in de database.';
    echo '<a href="uitschrijven.php">Klik hier om het nogmaals te proberen</a><br><br>';
    exit();
} else {
    echo 'Hoera! Het mailadres ' . $mailadres . ' is gevonden in de database!';
}
// QUERY SCHRIJVEN VOOR VERWIJDEREN DATA
$query = "DELETE FROM nieuwsbrief_tutorial WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Error querying.');


// CONNECTIE VERBREKEN

// VERSLAG DOEN VAN HET RESULTAAT