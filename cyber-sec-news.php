<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Updates</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            padding: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Latest Updates from the World of Cybersecurity</h1>

        <?php
        error_reporting(0);
        $url = "https://data.twingly.net/news/b/search/v1/search";
        $apiKey = "5FB7CB50-62CB-49DC-B5AB-8C2227853E05";

        $headers = [
            "Authorization: apikey $apiKey",
            "Content-Type: application/json; charset=utf-8",
            "Accept: application/json; charset=utf-8"
        ];

        $data = [
            "all" => ["cybersecurity", "internet", "hacking"],
            "none" => ["trump"],
            "locations" => ["us"],
            "size" => 30,
            "timestamp" => ["since" => "2023-08-20T20:00:00Z"]
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        if ($response) {
            $apiResponse = json_decode($response, true);
            if (isset($apiResponse['documents']) && is_array($apiResponse['documents'])) {
                foreach ($apiResponse['documents'] as $document) {
                    echo '<div class="card mt-4">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $document['title'] . '</h5>';
                    echo '<h6 class="card-subtitle mb-2 text-muted">Author: ' . $document['author'] . '</h6>';
                    echo '<p class="card-text">' . $document['summary'] . '</p>';
                     echo '<p class="card-text"><strong>' . date("F j, Y, g:i a", strtotime($document['timestamp'])) . '</strong></p>';
                    echo '<a href="' . $document['url'] . '" class="card-link" target="_blank">Read More</a>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No updates available.</p>';
            }
        } else {
            echo '<p>An error occurred while making the request.</p>';
        }
        ?>
    </div>
</body>
</html>
