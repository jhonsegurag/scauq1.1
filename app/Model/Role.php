<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 */
class Role extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idroles';

	
	public function getName()
	{
		return $this->query("SELECT nombre FROM roles;");
	}
}
