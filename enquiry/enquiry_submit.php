<?php 

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.sembark.com/integrations/v1/ping',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_TIMEOUT => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer <TOKEN_HERE>'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;

?>