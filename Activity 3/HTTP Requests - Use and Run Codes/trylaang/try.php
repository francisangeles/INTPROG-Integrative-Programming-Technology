<?php 
/*
 Practical Example: Consuming a REST API

$ch =
curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);if (curl_errno($ch)) { echo 'Error:'
. curl_error($ch);} 
else { $data = json_decode($response);
     echo 'Title: ' . $data->title
. '<br>'; echo 'Body: ' .
$data->body;}curl_close($ch);
*/

/* 
Working with HTTP Headers in PHP

Practical Example: Consuming a REST API
phpcurl_setopt($ch, CURLOPT_HTTPHEADER, array( 'User-Agent:
MyCustomApp/1.0', 'Authorization: Bearer YOUR_API_TOKEN'));
*/

/*
Using cURL for Robust HTTP Requests

$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt($ch,
CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);echo
$response;

*/

/*
Making HTTP POST Requests in PHP

$data = array
('name' => 'John Doe', 'email' =>
'john.doe@example.com');

$options = array
( 'http' => array('header' => "Content-type: application/x-www-form-urlencoded\r\n",
'method' => 'POST', 'content' => http_build_query($data),
),);

$context = stream_context_create($options);
$result = file_get_contents('https://httpbin.org/post', false, $context);
echo $result;

*/


/*
Making HTTP GET Requests in PHP

$response = file_get_contents('https://www.facebook.com/    ');
if
($response === FALSE) {
     // Handle error 
echo "Failed to retrieve
data.";}
 else { echo $response;}
 */
 ?>