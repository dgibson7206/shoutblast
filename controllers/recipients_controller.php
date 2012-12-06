<?php
class RecipientsController extends AppController {

	var $name = 'Recipients';
	var $components = array('Auth');

	function index(){
		$recipients = $this->Recipient->find('all', array(
		        'conditions' => array('Recipient.user_id' => $this->Auth->User('id'))
		));

        	$this->set(compact('recipients'));
	}

}
?>
