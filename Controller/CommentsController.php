<?php
class CommentsController extends AppController {

	var $uses = array('Comment', 'Thread', 'User');

	public $paginate = array(
		'recursive' => 2,
		'limit' => 25,
		'order' => array(
			'Comment.created' => 'DESC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->set('comments', $this->paginate());
	}

	public function view($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$users = $this->User->find('list', array(
				'fields' => array('User.id', 'User.username'),
				'order' => array('User.username ASC'),
				'recursive' => 0
			));
			$threads = $this->Thread->find('list', array(
				'fields' => array('Thread.id', 'Thread.name'),
				'order' => array('Thread.name ASC'),
				'recursive' => 0
			));
			$this->set('users', $users);
			$this->set('threads', $threads);
		}
	}

	public function edit($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Comment->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}