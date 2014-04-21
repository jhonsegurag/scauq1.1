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
		'idactivities_tasks' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fecha_registro' => array('type' => 'date', 'null' => true, 'default' => null),
		'id_Actividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Tarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Asignado_Por' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Asignado_A' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idactivities_tasks', 'unique' => 1),
			'fk_assigment_tasks_activities_idx' => array('column' => 'id_Actividad', 'unique' => 0),
			'fk_assigment_tasks_tasks_idx' => array('column' => 'id_Tarea', 'unique' => 0),
			'fk_assigment_tasks_users1_idx' => array('column' => 'id_Asignado_Por', 'unique' => 0),
			'fk_assigment_tasks_users2_idx' => array('column' => 'id_Asignado_A', 'unique' => 0)
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
			'idactivities_tasks' => 1,
			'fecha_registro' => '2014-04-21',
			'id_Actividad' => 1,
			'id_Tarea' => 1,
			'id_Asignado_Por' => 1,
			'id_Asignado_A' => 1
		),
	);

}
