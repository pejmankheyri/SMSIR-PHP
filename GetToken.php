<?php

/**
 * 
 * PHP version 5.6.x | 7.x | 8.x
 * 
 * @package PHP sample
 * @author Pejman Kheyri <pejmankheyri@gmail.com>
 * @copyright 2021 All rights reserved.
 * @link https://github.com/pejmankheyri/SMSIR-PHP 
 */

try {
	
	date_default_timezone_set("Asia/Tehran");
	
	include_once("Classes/GetToken.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";

	$SmsIR_GetToken = new SmsIR_GetToken($APIKey,$SecretKey);
	$GetToken = $SmsIR_GetToken->GetToken();
	var_dump($GetToken);
	
} catch (Exeption $e) {
	echo 'Error GetToken : '.$e->getMessage();
}

?>