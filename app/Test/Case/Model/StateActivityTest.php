<?php
App::uses('StateActivity', 'Model');

/**
 * StateActivity Test Case
 *
 */
class StateActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.state_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StateActivity = ClassRegistry::init('StateActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StateActivity);

		parent::tearDown();
	}

}
