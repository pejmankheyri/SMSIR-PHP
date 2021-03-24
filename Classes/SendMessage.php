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

class SmsIR_SendMessage {
	
	/**
	* gets API Message Send Url.
	*
    * @return string Indicates the Url
	*/
	protected function getAPIMessageSendUrl() {
		return "http://RestfulSms.com/api/MessageSend";
	}

	/**
	* gets Api Token Url.
	*
    * @return string Indicates the Url
	*/
	protected function getApiTokenUrl(){
		return "http://RestfulSms.com/api/Token";
	}
	
	/**
	* gets config parameters for sending request.
	*
	* @param string $APIKey API Key
	* @param string $SecretKey Secret Key
	* @param string $LineNumber Line Number
    * @return void
	*/
    public function __construct($APIKey,$SecretKey,$LineNumber){
		$this->APIKey = $APIKey;
		$this->SecretKey = $SecretKey;
		$this->LineNumber = $LineNumber;		
    }	

	/**
	* send sms.
	*
	* @param MobileNumbers[] $MobileNumbers array structure of mobile numbers
	* @param Messages[] $Messages array structure of messages
	* @param string $SendDateTime Send Date Time
    * @return string Indicates the sent sms result
	*/
	public function SendMessage($MobileNumbers, $Messages, $SendDateTime = '') {
		
		$token = $this->GetToken($this->APIKey, $this->SecretKey);
		if($token != false){
			$postData = array(
				'Messages' => $Messages,
				'MobileNumbers' => $MobileNumbers,
				'LineNumber' => $this->LineNumber,
				'SendDateTime' => $SendDateTime,
				'CanContinueInCaseOfError' => 'false'
			);
			
			$url = $this->getAPIMessageSendUrl();
			$SendMessage = $this->execute($postData, $url, $token);
			$object = json_decode($SendMessage);
			if(is_object($object)){
				$array = get_object_vars($object);
				if(is_array($array)){
					$result = $array['Message'];
				} else {
					$result = false;
				}
			} else {
				$result = false;
			}
			
		} else {
			$result = false;
		}
		return $result;
	}
	
	/**
	* gets token key for all web service requests.
	*
    * @return string Indicates the token key
	*/
	private function GetToken(){
		$postData = array(
			'UserApiKey' => $this->APIKey,
			'SecretKey' => $this->SecretKey,
			'System' => 'php_rest_v_1_2'
		);
		$postString = json_encode($postData);

		$ch = curl_init($this->getApiTokenUrl());
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/json'
                                            ));		
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_POST, count($postString));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		$response = json_decode($result);
		
		if(is_object($response)){
			$resultVars = get_object_vars($response);
			if(is_array($resultVars)){
				@$IsSuccessful = $resultVars['IsSuccessful'];
				if($IsSuccessful == true){
					@$TokenKey = $resultVars['TokenKey'];
					$resp = $TokenKey;
				} else {
					$resp = false;
				}
			}
		}
		
		return $resp;
	}
	
	/**
	* executes the main method.
	*
	* @param postData[] $postData array of json data
	* @param string $url url
	* @param string $token token string
    * @return string Indicates the curl execute result
	*/
	private function execute($postData, $url, $token){
		
		$postString = json_encode($postData);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
											'Content-Type: application/json',
											'x-sms-ir-secure-token: '.$token
											));		
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_POST, count($postString));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		return $result;
	}
}

?>