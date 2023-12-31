<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malicious URL Checker</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Malicious URL Checker</h1>
        <p class="text-center">Enter a URL below to check whether it's a potentially malicious or phishing URL.</p>

        <form id="urlScanForm" class="mt-4" method="POST" action="scan-url.php">
            <div class="form-group">
                <label for="url">Enter URL:</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="https://example.com">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="check_url">Check URL</button>
        </form>
        
        <!-- <div class="mt-4 card w-1/2">
            <div class="card-body">
                <h5 class="card-title">Details</h5>
                <h6 class="card-subtitle mb-1 text-muted">Source Url:</h6>
                <p class="card-text">Goole.com</p>
                <h6 class="card-subtitle mb-1 text-muted">Disposition:</h6>
                <p class="card-text">Clean</p>
                <h6 class="card-subtitle mb-1 text-muted">Brand:</h6>
                <p class="card-text">Unknown</p>
                <img src="https://bst-prod-screenshots.s3-us-west-2.amazonaws.com/20231022/5df1067bb03980dc3b831ff30985d25929cf8ae69f2eb2be465518dc94015131_1697984637938.png">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div> -->

        <?php
        if (isset($_POST['check_url'])) {
            $url = $_POST['url'];
            if (empty($url)) {
                echo '<div class="mt-4 text-center alert alert-warning">Please enter a URL to check.</div>';
            } else {

                // $link1 = "https://maps.app.goo.gl/tF52WgdASDi27qT68";
                // $sentence = "This is a sample sentence.";
                // $word = "sample";

                // if (strpos($url, $link1) !== false) {
                //     echo '<i class="fas fa-times-circle fa-5x" style="color: red;"></i>';
                //     echo '<p class="mt-3"><strong>O.</strong></p>';
                // } else {


                $url = '{"url": "'.$url.'"}';
                $apiKey = 'j61lnhfgdpwoot70wla89q6d506g285u3vwa7rxe2qdh46mr7xz2t1uniqcogdt0';
                $apiUrl = "https://developers.checkphish.ai/api/neo/scan";
                // $Urlinfo = "https://developers.checkphish.ai/api/neo/scan";

                $ch = curl_init($apiUrl);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['url' => $url]));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'apiKey: ' . $apiKey,
                    'urlInfo: ' . $url,
                ]);

                $response = curl_exec($ch);
                curl_close($ch);

                if ($response) {
                    $result = json_decode($response, true);
                    if ($result['jobID'] !== '') {

                        $apiUrl2 = "https://developers.checkphish.ai/api/neo/scan/status";
        
                        $ch = curl_init($apiUrl2);
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['url' => $url]));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                            'Content-Type: application/json',
                            'apiKey: ' . $apiKey,
                            'jobID: ' . $result['jobID'],
                            'insights: ' . true,
                        ]);
        
                        $response = curl_exec($ch);
                        curl_close($ch);
        
                        if ($response) {
                            $result = json_decode($response, true);

                    
                            echo '<div class="mt-4 text-center">';
                            if($result['error'] == false){
                                // Green checkmark icon and message
                                echo '<i class="fas fa-check-circle fa-5x" style="color: green;"></i>';
                                echo '<p class="mt-3"><strong>This website is secure</strong></p>';
                            }elseif($result['error'] == true){
                                echo '<i class="fas fa-times-circle fa-5x" style="color: red;"></i>';
                                echo '<p class="mt-3"><strong>Our systems detected that this website is suspicious. Please do not proceed to the site or enter any of your personal information.</strong></p>';
                            }else{
                                echo 'am coming home';
                            }

                        }
                            echo '</div>';
                } else {
                    echo '<div class="mt-4 text-center alert alert-danger">An error occurred while checking the URL.</div>';
                }
            }
        }
    }
    // }
        ?>
    </div>
</body>
</html>
