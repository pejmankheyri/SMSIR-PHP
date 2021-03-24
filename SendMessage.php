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
	
	include_once("Classes/SendMessage.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	$LineNumber = "enter your line number ...";
	
	// your mobile numbers
	$MobileNumbers = array('091xxxxxxxx','092xxxxxxxx','093xxxxxxxx');
	
	// your text messages
	$Messages = array('text1','text2','text3');
	
	// sending date
	@$SendDateTime = date("Y-m-d")."T".date("H:i:s");

	$SmsIR_SendMessage = new SmsIR_SendMessage($APIKey,$SecretKey,$LineNumber);
	$SendMessage = $SmsIR_SendMessage->SendMessage($MobileNumbers,$Messages,$SendDateTime);
	var_dump($SendMessage);
	
} catch (Exeption $e) {
	echo 'Error SendMessage : '.$e->getMessage();
}

?>