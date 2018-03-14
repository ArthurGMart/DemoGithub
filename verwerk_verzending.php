<?php

// 0. Uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost', 'root', 'root', 'arthur_db') or die ('error connecting');

// 2. Kijken in de database en alle mailadressen tevoorschijn brengen
$query = "SELECT mailadres FROM nieuwsbrief_tutorial";
$result = mysqli_query($dbc, $query) or die ('Error querying');

// 3. Loopje waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar' . $row['mailadres'] . '<br>';
    // Variabalen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: arthurgonzie@gmail.com';
    // Mail verzenden
    mail($to, $subject, $message, $headers);
}