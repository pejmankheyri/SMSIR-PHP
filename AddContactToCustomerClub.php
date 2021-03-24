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
	
	include_once("Classes/AddContactToCustomerClub.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// contact information
	$Prefix = 'Mr';
	$FirstName = 'FirstName';
	$LastName = 'LastName';
	$Mobile = '091xxxxxxxx';
	$BirthDay = '1370/01/01';
	$CategoryId = '';

	$SmsIR_AddContactToCustomerClub = new SmsIR_AddContactToCustomerClub($APIKey,$SecretKey);
	$AddContactToCustomerClub = $SmsIR_AddContactToCustomerClub->AddContactToCustomerClub($Prefix, $FirstName, $LastName, $Mobile, $BirthDay, $CategoryId);
	var_dump($AddContactToCustomerClub);
	
} catch (Exeption $e) {
	echo 'Error AddContactToCustomerClub : '.$e->getMessage();
}

?>