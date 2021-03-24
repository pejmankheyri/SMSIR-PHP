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
	
	include_once("Classes/CustomerClubSend.php");
	
	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// your mobile numbers
	$MobileNumbers = array('091xxxxxxxx','092xxxxxxxx','093xxxxxxxx');
	
	// your text messages
	$Messages = array('text1','text2','text3');
	
	// sending date
	@$SendDateTime = date("Y-m-d")."T".date("H:i:s");

	$SmsIR_CustomerClubSend = new SmsIR_CustomerClubSend($APIKey,$SecretKey);
	$CustomerClubSend = $SmsIR_CustomerClubSend->CustomerClubSend($MobileNumbers,$Messages,$SendDateTime);
	var_dump($CustomerClubSend);
	
} catch (Exeption $e) {
	echo 'Error CustomerClubSend : '.$e->getMessage();
}

?>