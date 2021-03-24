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
	
	include_once("Classes/GetCustomerClubContactsByCategoryIdByPageId.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";

	$categoryId = 0;
	$pageId = 1;
	
	$SmsIR_GetCustomerClubContactsByCategoryIdByPageId = new SmsIR_GetCustomerClubContactsByCategoryIdByPageId($APIKey,$SecretKey);
	$GetCustomerClubContactsByCategoryIdByPageId = $SmsIR_GetCustomerClubContactsByCategoryIdByPageId->GetCustomerClubContactsByCategoryIdByPageId($categoryId,$pageId);
	var_dump($GetCustomerClubContactsByCategoryIdByPageId);
	
} catch (Exeption $e) {
	echo 'Error GetCustomerClubContactsByCategoryIdByPageId : '.$e->getMessage();
}

?>