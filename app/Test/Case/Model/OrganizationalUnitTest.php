<?php
App::uses('OrganizationalUnit', 'Model');

/**
 * OrganizationalUnit Test Case
 *
 */
class OrganizationalUnitTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organizational_unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrganizationalUnit = ClassRegistry::init('OrganizationalUnit');
	}


	function testOrganizationalUnitInstance() {
		$this->assertTrue(is_a($this->OrganizationalUnit, 'OrganizationalUnit'));
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrganizationalUnit);

		parent::tearDown();
	}

}
