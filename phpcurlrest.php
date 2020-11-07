<?php


//GET
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$url = "http://192.168.174.130/phpjsgrid/fetch_data.php";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);

// Print all data if needed
print_r($response_data);




//POST
$url = 'http://192.168.174.130/phpjsgrid/fetch_data.php';
$fields = array(
	'first_name' => urlencode('first_name'),
	'last_name' => urlencode('last_name'),
	'age' => urlencode('11'),
	'gender' => urlencode('male')
);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);




//PUT
$url = 'http://192.168.174.130/phpjsgrid/fetch_data.php';
$fields = array(
	'id' => urlencode('147'),
	'first_name' => urlencode('first_name2'),
	'last_name' => urlencode('last_name2'),
	'age' => urlencode('11'),
	'gender' => urlencode('male')
);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
//curl_setopt($ch,CURLOPT_PUT, count($fields));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);


//DELETE
$url = 'http://192.168.174.130/phpjsgrid/fetch_data.php';
$fields = array(
	'id' => urlencode('147'),
	'first_name' => urlencode('first_name2'),
	'last_name' => urlencode('last_name2'),
	'age' => urlencode('11'),
	'gender' => urlencode('male')
);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
//curl_setopt($ch,CURLOPT_PUT, count($fields));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);