<?php
class RecipientsController extends AppController {

	var $name = 'Recipients';
//	var $helpers = array('Paginator', 'CakeEmail');
	var $helpers = array('Paginator');
	var $components = array('Auth');

	function index() {
		//echo '<pre>'; print_r($this->Recipient); echo '</pre>';
		//echo '<pre>'; print_r($this->Recipient->User); echo '</pre>';
		//echo $this->Auth->user('id');
		//$this->Recipient->recursive = 0;
		$this->set('recipients', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Recipient->create();
			if ($this->Recipient->save($this->data)) {
				$this->Session->setFlash(__('The recipient has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipient could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Recipient->User->find('list');
		$this->set(compact('users'));


		$settings = $this->Recipient->ListType->find('list', array(
                    'fields'     => array('ListType.id', 'ListType.name')
                ));
                $this->set(compact('settings'));




	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid recipient', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Recipient->save($this->data)) {
				$this->Session->setFlash(__('The recipient has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipient could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Recipient->read(null, $id);
		}

		//echo '<pre>'; print_r($this->data); echo '</pre>';
		
		$users = $this->Recipient->User->find('list');
		//$users = $this->Recipient->ListType->find('list');
		//echo '<pre>'; print_r($users); echo '</pre>';
		$this->set(compact('users'));

		$settings = $this->Recipient->ListType->find('list', array(
		    'fields'     => array('ListType.id', 'ListType.name')
		));
		$this->set(compact('settings'));


	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for recipient', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Recipient->delete($id)) {
			$this->Session->setFlash(__('Recipient deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Recipient was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
