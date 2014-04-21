<?php
/**
 * AssigmentTaskFixture
 *
 */
class AssigmentTaskFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idActivitiesTasks' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fechaRegistro' => array('type' => 'date', 'null' => true, 'default' => null),
		'idActividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idTarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idAsignadoPor' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idAsignadoA' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idActivitiesTasks', 'unique' => 1),
			'fk_assigment_tasks_activities_idx' => array('column' => 'idActividad', 'unique' => 0),
			'fk_assigment_tasks_tasks_idx' => array('column' => 'idTarea', 'unique' => 0),
			'fk_assigment_tasks_users1_idx' => array('column' => 'idAsignadoPor', 'unique' => 0),
			'fk_assigment_tasks_users2_idx' => array('column' => 'idAsignadoA', 'unique' => 0)
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
			'idActivitiesTasks' => 1,
			'fechaRegistro' => '2014-04-21',
			'idActividad' => 1,
			'idTarea' => 1,
			'idAsignadoPor' => 1,
			'idAsignadoA' => 1
		),
	);

}
