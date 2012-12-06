<?php
/* Recipient Test cases generated on: 2012-12-04 13:39:07 : 1354646347*/
App::import('Model', 'Recipient');

class RecipientTestCase extends CakeTestCase {
	var $fixtures = array('app.recipient', 'app.user', 'app.list_types');

	function startTest() {
		$this->Recipient =& ClassRegistry::init('Recipient');
	}

	function endTest() {
		unset($this->Recipient);
		ClassRegistry::flush();
	}

}
?>