<?php
$url = "http://7eoz4h2nvw4zlr7gvlbutinqqpm546f5egswax54az6lt2u7e3t6d7yd.onion/";
$apiKey = '5e531a73-3bc1-4aac-a89f-74bdf1bec995';
                $apiUrl = "https://urlscan.io/api/v1/scan/";

                $ch = curl_init($apiUrl);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['url' => $url]));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'API-Key: ' . $apiKey,
                ]);

                $response = curl_exec($ch);
                curl_close($ch);

                if ($response) {
                    $result = json_decode($response, true);
                    var_dump($result);
                }
                    
                //     echo '<div class="mt-4 text-center">';
                //     if ($result['message'] === 'Submission successful') {
                //         // Green checkmark icon and message
                //         echo '<i class="fas fa-check-circle fa-5x" style="color: green;"></i>';
                //         echo '<p class="mt-3"><strong>This website is secure</strong></p>';
                //     } else {
                //         // Red X icon and message
                //         echo '<i class="fas fa-times-circle fa-5x" style="color: red;"></i>';
                //         echo '<p class="mt-3"><strong>Our systems detected that this website is suspicious. Please do not proceed to the site or enter any of your personal information.</strong></p>';
                //     }
                //     echo '</div>';
                // } else {
                //     echo '<div class="mt-4 text-center alert alert-danger">An error occurred while checking the URL.</div>';
                // }


    // // $url = '{"url": "kkkkkkkk.com/"}';
    // $apiKey = '09z2bezdmrknzcvm7f4fvg4sfqwx1s8trpel9nhwum0oxhxe9hqvbaaojuuram67';
    // $apiUrl = "https://developers.checkphish.ai/api/neo/scan/status?apiKey=09z2bezdmrknzcvm7f4fvg4sfqwx1s8trpel9nhwum0oxhxe9hqvbaaojuuram67&jobID=cf01aa3c-35c5-4dc8-8534-29c2e4417dae&insights=true";
    // // $Urlinfo = "https://developers.checkphish.ai/api/neo/scan";

    // $ch = curl_init($apiUrl);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['url' => $url]));
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, [
    //     'Content-Type: application/json',
    //     'apiKey: ' . $apiKey,
    //     // 'urlInfo: ' . $url,
    // ]);

    // $response = curl_exec($ch);
    // curl_close($ch);

    // var_dump($response);

    // $json_object = json_decode($response, true);

    // $result = json_decode($response, true);
    // // $jsonObject = json_decode($jsonString);
    // echo $result['error'];
    //             // if ($response) {
    //             //     $result = json_decode($response, true);
    //             // }
?>