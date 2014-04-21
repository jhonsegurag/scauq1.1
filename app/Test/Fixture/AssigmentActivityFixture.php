<?php
/**
 * AssigmentActivityFixture
 *
 */
class AssigmentActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idusers_activities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'activities_idactivities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'users_idusers' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'fecha_asiganacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idusers_activities', 'unique' => 1),
			'users_activities_FKIndex1' => array('column' => 'users_idusers', 'unique' => 0),
			'users_activities_FKIndex2' => array('column' => 'activities_idactivities', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idusers_activities' => 1,
			'activities_idactivities' => 1,
			'users_idusers' => 1,
			'fecha_asiganacion' => '2014-04-21'
		),
	);

}
