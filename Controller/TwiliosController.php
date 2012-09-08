<?php
class TwiliosController extends AppController {

	var $uses = array('Twilio');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Twilio.name' => 'ASC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->set('twilios', $this->paginate());
	}

	public function view($id = null) {
		$this->Twilio->id = $id;
		if (!$this->Twilio->exists()) {
			throw new NotFoundException(__('Invalid twilio'));
		}
		$this->set('twilio', $this->Twilio->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Twilio->create();
			$this->Twilio->save($this->request->data);
			$this->Session->setFlash(__('The twilio has been saved'));
			$this->redirect(array('action' => 'index'));
		}
	}

	public function edit($id = null) {
		$this->Twilio->id = $id;
		if (!$this->Twilio->exists()) {
			throw new NotFoundException(__('Invalid twilio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Twilio->save($this->request->data)) {
				$this->Session->setFlash(__('The twilio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twilio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Twilio->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Twilio->id = $id;
		if (!$this->Twilio->exists()) {
			throw new NotFoundException(__('Invalid twillio'));
		}
		if ($this->Twilio->delete()) {
			$this->Session->setFlash(__('Twilio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Twilio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}