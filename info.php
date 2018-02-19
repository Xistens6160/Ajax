<?php
//$_POST;
//    $response = [
//        'date' =>  strftime("%D"),
//        'day' =>  strftime("%A"),
//        'month' => strftime("%B"),
//        'year' => strftime("%G"),
//    ];
$_POST;
if($datei== 1){
    $response = [output =>  strftime("%D")];
}

if($datei == 2){
    $response = [output =>  strftime("%A")];
}

if($datei == 3){
    $response = [output =>  strftime("%B")];
}

if($datei== 4){
    $response = [output => strftime("%G")];
}

$json =json_encode($response);
echo $json;

