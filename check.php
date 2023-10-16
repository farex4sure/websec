<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
$url = $_POST['url'];

// List of allowed URLs
$allowedURLs = ['google.com', 'amazon.com', 'facebook.com', 'wikipedia.org'];

if (in_array($url, $allowedURLs)) {
    // Generate a random number between 10,564 and 100,000
    $randomNumber = rand(10564, 100000);
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>URL Checker</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="alert alert-danger">
                About ' . $randomNumber . ' attacks in the past 24 hours.
            </div>
        </div>
    </body>
    </html>';
} else {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>URL Checker</title>
        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="alert alert-warning">
                We couldn\'t find a record for ' . $url . '.
            </div>
        </div>
    </body>
    </html>';
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title>URL Checker</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Include jQuery -->
</head>
<body>
    <div class="container mt-5">
        <form id="urlForm" method="post" action="check.php">
            <div class="form-group">
                <label for="url">Enter a URL:</label>
                <input type="text" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary" id="checkButton">Check URL</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $("#urlForm").submit(function (e) {
                // Prevent the form from submitting immediately
                e.preventDefault();
                
                // Change the button text to "Checking..."
                $("#checkButton").html("Checking...");
                
                // Submit the form after a short delay (you can adjust this)
                setTimeout(function () {
                    $("#urlForm").off("submit").submit();
                }, 10000);
            });
        });
    </script>
</body>
</html>
