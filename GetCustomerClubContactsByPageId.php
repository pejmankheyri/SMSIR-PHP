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
	
	include_once("Classes/GetCustomerClubContactsByPageId.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";

	$pageId = 1;
	
	$SmsIR_GetCustomerClubContactsByPageId = new SmsIR_GetCustomerClubContactsByPageId($APIKey,$SecretKey);
	$GetCustomerClubContactsByPageId = $SmsIR_GetCustomerClubContactsByPageId->GetCustomerClubContactsByPageId($pageId);
	var_dump($GetCustomerClubContactsByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetCustomerClubContactsByPageId : '.$e->getMessage();
}

?>