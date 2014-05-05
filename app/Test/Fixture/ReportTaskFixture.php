<?php
/**
 * ReportTaskFixture
 *
 */
class ReportTaskFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idReportTasks' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fecha' => array('type' => 'date', 'null' => true, 'default' => null),
		'idEstadoReporteTarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'tracking_task_idTrackingTask' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idReportTasks', 'unique' => 1),
			'fk_report_tasks_state_reports_tasks_idx' => array('column' => 'idEstadoReporteTarea', 'unique' => 0),
			'fk_report_tasks_tracking_task1_idx' => array('column' => 'tracking_task_idTrackingTask', 'unique' => 0)
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
			'idReportTasks' => 1,
			'fecha' => '2014-05-06',
			'idEstadoReporteTarea' => 1,
			'tracking_task_idTrackingTask' => 1
		),
	);

}
