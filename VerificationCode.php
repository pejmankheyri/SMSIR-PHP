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
	
	include_once("Classes/VerificationCode.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// your code
	$Code = "12345";
	
	// your mobile number
	$MobileNumber = "091xxxxxxxx"; 

	$SmsIR_VerificationCode = new SmsIR_VerificationCode($APIKey,$SecretKey);
	$VerificationCode = $SmsIR_VerificationCode->VerificationCode($Code, $MobileNumber);
	var_dump($VerificationCode);
	
} catch (Exeption $e) {
	echo 'Error VerificationCode : '.$e->getMessage();
}

?>