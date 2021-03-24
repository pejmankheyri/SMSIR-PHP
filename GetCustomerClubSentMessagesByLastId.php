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
	
	include_once("Classes/GetCustomerClubSentMessagesByLastId.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";

	$lastId = 1;
	
	$SmsIR_GetCustomerClubSentMessagesByLastId = new SmsIR_GetCustomerClubSentMessagesByLastId($APIKey,$SecretKey);
	$GetCustomerClubSentMessagesByLastId = $SmsIR_GetCustomerClubSentMessagesByLastId->GetCustomerClubSentMessagesByLastId($lastId);
	var_dump($GetCustomerClubSentMessagesByLastId);
	
} catch (Exeption $e) {
	echo 'Error GetCustomerClubSentMessagesByLastId : '.$e->getMessage();
}

?>