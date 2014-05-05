<?php
App::uses('StateReportsTask', 'Model');

/**
 * StateReportsTask Test Case
 *
 */
class StateReportsTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state_reports_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StateReportsTask = ClassRegistry::init('StateReportsTask');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StateReportsTask);

		parent::tearDown();
	}

}
