<?php
/**
 * TaskFixture
 *
 */
class TaskFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTasks' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descripcion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'entregable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idEstadoTarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'idArchivoEntregableTarea' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTasks', 'unique' => 1),
			'fk_tasks_file_tasks_idx' => array('column' => 'idArchivoEntregableTarea', 'unique' => 0),
			'fk_tasks_state_tasks_idx' => array('column' => 'idEstadoTarea', 'unique' => 0)
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
			'idTasks' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'entregable' => 'Lorem ipsum dolor sit amet',
			'idEstadoTarea' => 1,
			'idArchivoEntregableTarea' => 1
		),
	);

}
