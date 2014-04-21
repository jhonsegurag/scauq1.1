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
		'idAssigmentActivities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fechaAsignacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'idActividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idAsignadoPor' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idAsignadoA' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idAssigmentActivities', 'unique' => 1),
			'fk_assigment_activities_AsignadoPor_idx' => array('column' => 'idAsignadoPor', 'unique' => 0),
			'fk_assigment_activities_activities_idx' => array('column' => 'idActividad', 'unique' => 0),
			'fk_assigment_activities_AsignadoA_idx' => array('column' => 'idAsignadoA', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idAssigmentActivities' => 1,
			'fechaAsignacion' => '2014-04-21',
			'idActividad' => 1,
			'idAsignadoPor' => 1,
			'idAsignadoA' => 1
		),
	);

}
