<?php
/**
 * TrackingTaskFixture
 *
 */
class TrackingTaskFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tracking_task';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTrackingTask' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'usernameResponsable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaActual' => array('type' => 'date', 'null' => true, 'default' => null),
		'nombreTarea' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'estadoTarea' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTrackingTask', 'unique' => 1)
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
			'idTrackingTask' => 1,
			'usernameResponsable' => 'Lorem ipsum dolor sit amet',
			'fechaActual' => '2014-05-05',
			'nombreTarea' => 'Lorem ipsum dolor sit amet',
			'estadoTarea' => 'Lorem ipsum dolor sit amet'
		),
	);

}
