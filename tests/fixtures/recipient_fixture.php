<?php
/* Recipient Fixture generated on: 2012-12-04 13:39:06 : 1354646346 */
class RecipientFixture extends CakeTestFixture {
	var $name = 'Recipient';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'primary', 'comment' => 'primary key'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'index', 'comment' => 'user_id'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => 'recipient address', 'charset' => 'latin1'),
		'type' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 8, 'key' => 'index', 'comment' => 'recipient address type'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0), 'type' => array('column' => 'type', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'type' => 1,
			'indexes' => 1
		),
	);
}
?>