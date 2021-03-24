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
	
	include_once("Classes/GetCredit.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	$SmsIR_GetCredit = new SmsIR_GetCredit($APIKey,$SecretKey);
	$GetCredit = $SmsIR_GetCredit->GetCredit();
	var_dump($GetCredit);
	
} catch (Exeption $e) {
	echo 'Error GetCredit : '.$e->getMessage();
}

?>