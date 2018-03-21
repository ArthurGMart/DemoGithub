<?php

// POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$mailadres = $_POST['mailadres'];

// DATA IN DATABASE STOPPEN
// 1. VERBINDING MAKEN MET DATABASE
$dbc = mysqli_connect('localhost','root','','arthur_db') or die ('Error connecting.');
// 2. OPDRACHT (QUERY) SCHRIJVEN VOOR DE DATABASE

// 3. QUERY UITVOEREN

// 4. VERBINDING VERBREKEN

//  BEVESTIGEN DAT DATA IN DE DATABASE STAAT
echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
echo $voornaam . '<br>' ;
echo $tussenvoegsel . '<br>' ;
echo $achternaam . '<br>' ;
echo $mailadres . '<br>' ;