<?php
/**
 * ActivityFixture
 *
 */
class ActivityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idactivities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'file_activities_idfile_activities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'state_activities_idstate_activities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fechaInicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechaFin' => array('type' => 'date', 'null' => true, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'afecta' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dirigido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fuentes_informacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'proceso' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idactivities', 'unique' => 1),
			'activities_FKIndex1' => array('column' => 'state_activities_idstate_activities', 'unique' => 0),
			'activities_FKIndex2' => array('column' => 'file_activities_idfile_activities', 'unique' => 0)
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
			'idactivities' => 1,
			'file_activities_idfile_activities' => 1,
			'state_activities_idstate_activities' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'fechaInicio' => '2014-04-21',
			'fechaFin' => '2014-04-21',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'afecta' => 'Lorem ipsum dolor sit amet',
			'dirigido' => 'Lorem ipsum dolor sit amet',
			'fuentes_informacion' => 'Lorem ipsum dolor sit amet',
			'proceso' => 'Lorem ipsum dolor sit amet'
		),
	);

}
