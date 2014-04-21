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
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 350, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dirigido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaInicio' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechaFin' => array('type' => 'date', 'null' => true, 'default' => null),
		'afecta' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fuentes_informacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'proceso' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_Estado_Actividad' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'id_Archivo_Entregable_Actividad' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idactivities', 'unique' => 1),
			'fk_activities_state_activities_idx' => array('column' => 'id_Estado_Actividad', 'unique' => 0),
			'fk_activities_file_activities_idx' => array('column' => 'id_Archivo_Entregable_Actividad', 'unique' => 0)
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
			'idactivities' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'dirigido' => 'Lorem ipsum dolor sit amet',
			'fechaInicio' => '2014-04-21',
			'fechaFin' => '2014-04-21',
			'afecta' => 'Lorem ipsum dolor sit amet',
			'fuentes_informacion' => 'Lorem ipsum dolor sit amet',
			'proceso' => 'Lorem ipsum dolor sit amet',
			'id_Estado_Actividad' => 1,
			'id_Archivo_Entregable_Actividad' => 1
		),
	);

}
