<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 24.07.2018
 * Time: 15:22
 */

function httpPostSend(array $cells, $distance){
    // The data to send to the API
    $postData = array(
        "cells" => $cells,
        "distance" => $distance
    );

    //Encode the array into JSON.
    $jsonDataEncoded = json_encode($postData);

    // Setup cURL
    $ch = curl_init('https://localhost:8080/plant.php');

    //Tell cURL that we want to send a POST request.
    curl_setopt($ch, CURLOPT_POST, 1);

    //Attach our encoded JSON string to the POST fields.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

    //Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    //Execute the request
    $response = curl_exec($ch);

    // Check for errors
    if($response === FALSE){
        die(curl_error($ch));
    }

    // Decode the response
    $responseData = json_decode($response, TRUE);

    // Print the date from the response
    echo $responseData;
}
?>
