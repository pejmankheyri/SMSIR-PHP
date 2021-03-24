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
	
	include_once("Classes/UltraFastSend.php");

	// your sms.ir panel configuration
	$APIKey = "enter your api key ...";
	$SecretKey = "enter your secret key ...";
	
	// message data
	$data = array(
		"ParameterArray" => array(
			array(
				"Parameter" => "FirstVariable",
				"ParameterValue" => "xxxx"
			),
			array(
				"Parameter" => "SecondVariable",
				"ParameterValue" => "xxxx"
			),
			array(
				"Parameter" => "ThirdVariable",
				"ParameterValue" => "xxxx"
			)
		),
		"Mobile" => "091xxxxxxxx",
		"TemplateId" => "26"
	);

	$SmsIR_UltraFastSend = new SmsIR_UltraFastSend($APIKey,$SecretKey);
	$UltraFastSend = $SmsIR_UltraFastSend->UltraFastSend($data);
	var_dump($UltraFastSend);
	
} catch (Exeption $e) {
	echo 'Error UltraFastSend : '.$e->getMessage();
}

?>