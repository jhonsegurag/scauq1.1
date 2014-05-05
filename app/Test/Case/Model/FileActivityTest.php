<?php
App::uses('FileActivity', 'Model');

/**
 * FileActivity Test Case
 *
 */
class FileActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.file_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FileActivity = ClassRegistry::init('FileActivity');
	}


	function testFileActivityInstance() {
		$this->assertTrue(is_a($this->FileActivity, 'FileActivity'));
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FileActivity);

		parent::tearDown();
	}

}
