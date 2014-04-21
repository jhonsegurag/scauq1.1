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
		'idAssigment_activities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fecha_asiganacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'id_Actividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Asignado_Por' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Asignado_A' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idAssigment_activities', 'unique' => 1),
			'fk_assigment_activities_AsignadoPor_idx' => array('column' => 'id_Asignado_Por', 'unique' => 0),
			'fk_assigment_activities_activities_idx' => array('column' => 'id_Actividad', 'unique' => 0),
			'fk_assigment_activities_AsignadoA_idx' => array('column' => 'id_Asignado_A', 'unique' => 0)
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
			'idAssigment_activities' => 1,
			'fecha_asiganacion' => '2014-04-21',
			'id_Actividad' => 1,
			'id_Asignado_Por' => 1,
			'id_Asignado_A' => 1
		),
	);

}
