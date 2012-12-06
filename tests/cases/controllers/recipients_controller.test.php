<?php
/* Recipients Test cases generated on: 2012-12-04 13:26:56 : 1354645616*/
App::import('Controller', 'Recipients');

class TestRecipientsController extends RecipientsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecipientsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.recipient', 'app.user');

	function startTest() {
		$this->Recipients =& new TestRecipientsController();
		$this->Recipients->constructClasses();
	}

	function endTest() {
		unset($this->Recipients);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>