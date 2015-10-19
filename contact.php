<?php
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile = $_REQUEST["mobile"];
$url = 'https://api.sendgrid.com/';

//$msg   = $_REQUEST["msg"];
$to    = "infobactech@gmail.com"; // <--- Change email ID here
if (isset($email) && isset($name)) {
    $subject = "$name sent you a message via BactTech.com";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Mobile: $mobile "; //<br/>Message: $msg
	
//   if($mail)
// 	{
// 		echo 'success';
// 	}

// else
// 	{
// 		echo 'failed';
// 	}
// }

$params = array(
    'api_user'  => 'azure',
    'api_key'   => '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',
    'to'        => $to,
    'subject'   => $subject,
    'html'      => $msg,
    'from'      => 'example@sendgrid.com',
  );


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
print_r($response);

?>

