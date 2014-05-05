<?php
App::uses('FileTask', 'Model');

/**
 * FileTask Test Case
 *
 */
class FileTaskTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.file_task'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FileTask = ClassRegistry::init('FileTask');
	}
	
	function testFileTaskInstance() {
		$this->assertTrue(is_a($this->FileTask, 'FileTask'));
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FileTask);

		parent::tearDown();
	}

}
