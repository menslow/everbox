<?php
class ThreadsController extends AppController {

	var $uses = array('Thread');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Thread.modified' => 'DESC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->set('threads', $this->paginate());
	}

	public function view($id = null) {
		$this->Thread->id = $id;
		if (!$this->Thread->exists()) {
			throw new NotFoundException(__('Invalid thread'));
		}
		$this->set('thread', $this->Thread->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Thread->create();
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Thread->id = $id;
		if (!$this->Thread->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Thread->save($this->request->data)) {
				$this->Session->setFlash(__('The thread has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thread could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Thread->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Thread->id = $id;
		if (!$this->Thread->exists()) {
			throw new NotFoundException(__('Invalid thread'));
		}
		if ($this->Thread->delete()) {
			$this->Session->setFlash(__('Thread deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Thread was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}