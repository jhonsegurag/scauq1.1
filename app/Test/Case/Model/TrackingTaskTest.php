<?php
App::uses('TrackingTask', 'Model');

/**
 * TrackingTask Test Case
 *
 */
class TrackingTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tracking_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TrackingTask = ClassRegistry::init('TrackingTask');
	}
	
	function testTrackingTaskInstance() {
		$this->assertTrue(is_a($this->TrackingTask, 'TrackingTask'));
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TrackingTask);

		parent::tearDown();
	}

}
