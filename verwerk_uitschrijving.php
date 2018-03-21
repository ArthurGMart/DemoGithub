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

// QUERY UITVOEREN

// CONNECTIE VERBREKEN

// VERSLAG DOEN VAN HET RESULTAAT