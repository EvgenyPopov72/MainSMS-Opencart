<?php
require_once 'mainsms.class.inc';

final class Main_SMS extends SmsGate {

	public function send() {					
		$api = new MainSMS($this->username, $this->password, false, false);
		
		$api->sendSMS($this->to.",".$this->copy, $this->message, $this->from);
		
		return $api->getResponse();
	}
}
?>
