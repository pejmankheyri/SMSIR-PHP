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
	
	include_once("Classes/SentMessageResponseByDate.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	$Shamsi_FromDate = '1397/02/1';
	$Shamsi_ToDate = '1397/02/31';
	$RowsPerPage = 10;
	$RequestedPageNumber = 1;
	
	$SmsIR_SentMessageResponseByDate = new SmsIR_SentMessageResponseByDate($APIKey,$SecretKey);
	$SentMessageResponseByDate = $SmsIR_SentMessageResponseByDate->SentMessageResponseByDate($Shamsi_FromDate, $Shamsi_ToDate, $RowsPerPage, $RequestedPageNumber);
	var_dump($SentMessageResponseByDate);
	
} catch (Exeption $e) {
	echo 'Error SentMessageResponseByDate : '.$e->getMessage();
}

?>