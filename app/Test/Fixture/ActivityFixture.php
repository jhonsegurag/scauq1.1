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
		'idActivities' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 350, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dirigido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaInicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechaFin' => array('type' => 'date', 'null' => true, 'default' => null),
		'afecta' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fuentesInformacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'proceso' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idEstadoActividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idArchivoEntregableActividad' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idActivities', 'unique' => 1),
			'fk_activities_state_activities_idx' => array('column' => 'idEstadoActividad', 'unique' => 0),
			'fk_activities_file_activities_idx' => array('column' => 'idArchivoEntregableActividad', 'unique' => 0)
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
			'idActivities' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'dirigido' => 'Lorem ipsum dolor sit amet',
			'fechaInicio' => '2014-04-21',
			'fechaFin' => '2014-04-21',
			'afecta' => 'Lorem ipsum dolor sit amet',
			'fuentesInformacion' => 'Lorem ipsum dolor sit amet',
			'proceso' => 'Lorem ipsum dolor sit amet',
			'idEstadoActividad' => 1,
			'idArchivoEntregableActividad' => 1
		),
	);

}
