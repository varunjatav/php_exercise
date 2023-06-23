<?php 


$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$days = $_POST['days'];
$date = $_POST['date'];
$comments = $_POST['comments'];
// create a payload for the request
$payload = http_build_query([
  'name' => $name,
  'phone_number' => $phone_number,
  'email' => $email,
  'destination' => $destination,
  'days' => $days,
  'date' => $date,
  'comments' => $comments
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

$redirect_url = "success.php?" . $payload;
header("Location: $redirect_url");
exit();
?>