

<?php

if(isset($_POST['submit']))
{

   $nom=$_POST["nom"];
   $nomEvent=$_POST["nomEvent"];
   $tel='216'.$_POST["tel"];


// Account details
	$apiKey = urlencode('OnzD9U79WQs-aJ3W9skbWo8AVHfxJOUOEUS6ZW9kEC');
	
	// Message details
	$numbers = array($tel);
	$sender = urlencode('CarePoint');
	$message = rawurlencode('Dear'.$nom.' thank you for your intrest in our event : '.$nomEvent.' We cant wait to see you.');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
	
}
?>         
