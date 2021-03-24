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
	
	include_once("Classes/SentMessageResponseById.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// your sent message id
	$id = "enter your message id ...";
	
	$SmsIR_SentMessageResponseById = new SmsIR_SentMessageResponseById($APIKey,$SecretKey);
	$SentMessageResponseById = $SmsIR_SentMessageResponseById->SentMessageResponseById($id);
	var_dump($SentMessageResponseById);
	
} catch (Exeption $e) {
	echo 'Error SentMessageResponseById : '.$e->getMessage();
}

?>