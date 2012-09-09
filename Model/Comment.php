<?php
class Comment extends AppModel {
	public $name = 'Comment';
	public $belongsTo = array('User','Thread');
	public $validate = array(
		'user_id' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A user_id is required'
			)
		),
		'content' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A content is required'
			)
		)
	);

	public function beforeSave() {
	}

}