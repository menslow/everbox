<?php
class Thread extends AppModel {
	public $name = 'Thread';
	public $hasMany = array('Comment');
	public $validate = array(
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A name is required'
			)
		)
	);

	public function beforeSave() {
	}

}