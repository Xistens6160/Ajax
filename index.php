<?php
setlocale(LC_TIME, "de_DE");
$url = $_GET['Url'];
$message = [];

if($url == 'date'){
    $message = strftime("%D");
}

if($url == 'day' ){
    $message = strftime("%A");
}

if($_GET['month']){
    $message = strftime("%B");
}

if($url == 'year'){
    $message =strftime("%G");
}

if ($url == 'Date'){
    $datum =$_GET['datum'];
    $tag = strftime($datum);
    $wochentag = date("l", $tag );
   $message =  $wochentag;
}

$json = json_encode($message);
echo $json;


