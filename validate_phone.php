<?php
// Your API key
$api_key = 'TyN1h9drwK3gQR1dPdTkIdLY8COzNGW7';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_number = $_POST['phoneNumber'];
    
    $api_url = 'https://www.ipqualityscore.com/api/json/phone/'.$api_key.'/'.$phone_number;

    $response = file_get_contents($api_url);
    if ($response) {
        $data = json_decode($response, true);

         
          if ($response) {
        $data = json_decode($response, true);

        // Define a CSS class based on validation result for Bootstrap styling
        $alertClass = 'primary';
   $message.=' <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Validation Result</h1>
                <div class="mt-3" id="result">'
                   
                ;
         
        // Format the response for display
        $formattedResponse = "<div class='alert $alertClass'>";
        $formattedResponse .= "<strong>Message:</strong> " . $data['message'] . "<br>";
        $formattedResponse .= "<strong>Formatted:</strong> " . $data['formatted'] . "<br>";
        $formattedResponse .= "<strong>Local Format:</strong> " . $data['local_format'] . "<br>";
        $formattedResponse .= "<strong>Valid:</strong> " . ($data['valid'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Fraud Score:</strong> " . $data['fraud_score'] . "<br>";
        $formattedResponse .= "<strong>Recent Abuse:</strong> " . ($data['recent_abuse'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>VOIP:</strong> " . ($data['VOIP'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Prepaid:</strong> " . ($data['prepaid'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Risky:</strong> " . ($data['risky'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Active:</strong> " . ($data['active'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Carrier:</strong> " . $data['carrier'] . "<br>";
        $formattedResponse .= "<strong>Line Type:</strong> " . $data['line_type'] . "<br>";
        $formattedResponse .= "<strong>Country:</strong> " . $data['country'] . "<br>";
        $formattedResponse .= "<strong>City:</strong> " . $data['city'] . "<br>";
        $formattedResponse .= "<strong>Zip Code:</strong> " . $data['zip_code'] . "<br>";
        $formattedResponse .= "<strong>Region:</strong> " . $data['region'] . "<br>";
        $formattedResponse .= "<strong>Dialing Code:</strong> " . $data['dialing_code'] . "<br>";
        $formattedResponse .= "<strong>Active Status:</strong> " . $data['active_status'] . "<br>";
        $formattedResponse .= "<strong>SMS Domain:</strong> " . $data['sms_domain'] . "<br>";
        $formattedResponse .= "<strong>User Activity:</strong> " . $data['user_activity'] . "<br>";
        $formattedResponse .= "<strong>MNC:</strong> " . $data['mnc'] . "<br>";
        $formattedResponse .= "<strong>MCC:</strong> " . $data['mcc'] . "<br>";
        $formattedResponse .= "<strong>Leaked:</strong> " . ($data['leaked'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Spammer:</strong> " . ($data['spammer'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>Request ID:</strong> " . $data['request_id'] . "<br>";
        $formattedResponse .= "<strong>Name:</strong> " . $data['name'] . "<br>";
        $formattedResponse .= "<strong>Timezone:</strong> " . $data['timezone'] . "<br>";
        $formattedResponse .= "<strong>Do Not Call:</strong> " . ($data['do_not_call'] ? 'Yes' : 'No') . "<br>";
        $formattedResponse .= "<strong>SMS Email:</strong> " . $data['sms_email'] . "<br>";
        $formattedResponse .= "</div>";
        $message.= $formattedResponse;
         
         
         
      
         
         
        } else {
            $message = '<div class="alert alert-danger" role="alert">Phone is not valid.</div>';
        }}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation Result</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   
              <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Phone Number Validation</h1>
                <p class="lead text-center">Enter a phone number to validate its authenticity.</p>
                <form action="validate_phone.php" method="post">
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Enter phone number" required>
                    </div> <br>
                    <button type="submit" class="btn btn-primary btn-block">Validate</button>
                </form>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
<?php    echo $message; ?> </div>
</body>
</html>
