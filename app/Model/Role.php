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

	/**
	 * Funcion que retorna los nombres de los roles
	 */
	public function getName()
	{
		return $this->query("SELECT nombre FROM roles;");
	}
	
}
