<?php 
// create a payload for the request
$payload = http_build_query([
  'name' => 'e.g. Sembark Client', // Guest/Agent Name [required
  'phone_number' => 'e.g. 9009009999', // Contact No. [required]
  'email' => 'e.g. client@example.com', // Contact Email
  'destination' => 'e.g. Sikkim', // Destination details
  'days' => 'e.g. 4', // Any Reference ID
  'date' => 'e.g. dd-mm-yy',
  // Any other custom details can be added into the comments section
  'comments' => 'e.g. 3 Adults, 4 Star Hotels, AC Vehicles'
]);

// set data to APIs and handle the response
$curl_handler = curl_init();
curl_setopt_array($curl_handler, array(
  CURLOPT_URL => 'https://demoapi.sembark.com/integrations/v1/trip-plan-requests',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_TIMEOUT => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer 7|RpZ8NfGLpjRtln2o1d2CwW2cd1aVbq7iC6UpJge8' // Update the token

  ),
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $payload // payload here
));
$response = curl_exec($curl_handler);
if (curl_errno($curl_handler)) {
    $error_message = curl_error($curl_handler);
}
curl_close($curl_handler);
if (isset($error_message)) {
  // TODO - Handle the error
  die($error_message);
}
echo $response;

header('Location: success.php');
exit();
?>