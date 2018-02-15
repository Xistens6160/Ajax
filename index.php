<?php
setlocale(LC_TIME, "de_DE");
$url = $_GET['Url'];

if($url == 'date'){
    echo 'Datum laut Serverzeit:';
    echo strftime("%D");
}

if($url == 'day' ){
    echo ("Heute ist ");
    echo strftime("%A.");
}

if($url =='month'){
    echo  ("Aktueller Monat: ");
    echo  strftime("%B.");
}