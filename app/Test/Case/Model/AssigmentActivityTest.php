<?php
App::uses('AssigmentActivity', 'Model');

/**
 * AssigmentActivity Test Case
 *
 */
class AssigmentActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assigment_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AssigmentActivity = ClassRegistry::init('AssigmentActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssigmentActivity);

		parent::tearDown();
	}

}
