<?php
/**
 * OrganizationalUnitFixture
 *
 */
class OrganizationalUnitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idOrganizationalUnit' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'idUnidadOrganizacional' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idOrganizationalUnit', 'unique' => 1),
			'fk_organizational_units_organizational_units_idx' => array('column' => 'idUnidadOrganizacional', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idOrganizationalUnit' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'idUnidadOrganizacional' => 1
		),
	);

}
