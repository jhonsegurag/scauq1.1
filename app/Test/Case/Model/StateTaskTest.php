<?php
App::uses('StateTask', 'Model');

/**
 * StateTask Test Case
 *
 */
class StateTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StateTask = ClassRegistry::init('StateTask');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StateTask);

		parent::tearDown();
	}

}
