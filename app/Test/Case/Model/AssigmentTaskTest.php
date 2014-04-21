<?php
App::uses('AssigmentTask', 'Model');

/**
 * AssigmentTask Test Case
 *
 */
class AssigmentTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assigment_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AssigmentTask = ClassRegistry::init('AssigmentTask');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssigmentTask);

		parent::tearDown();
	}

}
