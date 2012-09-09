<?php
class CakeboxsController extends AppController {

  var $uses = array('Twilio', 'User');

    public $components = array('Dropbox.DropboxApi', 'Auth');
    
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
		$this->set('cakebox', $this->authorize_with_dropbox());
	}

	public function view($id = null) {
	}

    public function authorize_with_dropbox() {
      $this->DropboxApi->authorize();

      $files = $this->DropboxApi->ls();

      debug ($files, true);
    }

    public function list_some_files() {
    }
}