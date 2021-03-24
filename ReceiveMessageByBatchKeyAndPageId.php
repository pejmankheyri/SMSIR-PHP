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
	
	include_once("Classes/ReceiveMessageByBatchKeyAndPageId.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	$batchKey = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
	$pageId = 1;
	
	$SmsIR_ReceiveMessageByBatchKeyAndPageId = new SmsIR_ReceiveMessageByBatchKeyAndPageId($APIKey,$SecretKey);
	$ReceiveMessageByBatchKeyAndPageId = $SmsIR_ReceiveMessageByBatchKeyAndPageId->ReceiveMessageByBatchKeyAndPageId($pageId, $batchKey);
	var_dump($ReceiveMessageByBatchKeyAndPageId);
	
} catch (Exeption $e) {
	echo 'Error ReceiveMessageByBatchKeyAndPageId : '.$e->getMessage();
}

?>