<?php
$_POST;
    $response = [
        'date' =>  strftime("%D"),
        'day' =>  strftime("%A"),
        'month' => strftime("%B"),
        'year' => strftime("%G"),
    ];

$json =json_encode($response);
echo $json;

