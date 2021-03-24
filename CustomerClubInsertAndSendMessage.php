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
	
	include_once("Classes/CustomerClubInsertAndSendMessage.php");
	
	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// contacts information	
	$data = array(
		array(
			"Prefix" => "Mr",
			"FirstName" => "FirstName" ,
			"LastName" => "LastName",
			"Mobile" => "091xxxxxxxx",
			"BirthDay" => "1370/01/01",
			"CategoryId" => "",
			"MessageText" => "text1"		
		),
		array(
			"Prefix" => "Mr2",
			"FirstName" => "FirstName2" ,
			"LastName" => "LastName2",
			"Mobile" => "092xxxxxxxx",
			"BirthDay" => "1370/02/02",
			"CategoryId" => "",
			"MessageText" => "text2"		
		)
	);

	$SmsIR_CustomerClubInsertAndSendMessage = new SmsIR_CustomerClubInsertAndSendMessage($APIKey,$SecretKey);
	$CustomerClubInsertAndSendMessage = $SmsIR_CustomerClubInsertAndSendMessage->CustomerClubInsertAndSendMessage($data);
	var_dump($CustomerClubInsertAndSendMessage);
	
} catch (Exeption $e) {
	echo 'Error CustomerClubInsertAndSendMessage : '.$e->getMessage();
}

?>