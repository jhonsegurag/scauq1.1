<?php
App::uses('ReportTask', 'Model');

/**
 * ReportTask Test Case
 *
 */
class ReportTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.report_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReportTask = ClassRegistry::init('ReportTask');
	}

	function testReportTaskInstance() {
		$this->assertTrue(is_a($this->ReportTask, 'ReportTask'));
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReportTask);

		parent::tearDown();
	}

}
