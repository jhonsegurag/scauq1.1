<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idUser';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'idUser';

	/**
	 * Arreglo de validacion de campos en el momento de login de un usuario
	 * @var unknown
	 */
	public $validate = array(
			'username' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A username is required'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A password is required'
					)
			)
	);
	
	/**
	 * Metodo que transforma la constraseña antes de ser almacenada
	 * @param unknown $options
	 * @return boolean
	*/
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
					$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	
	/**
	 * Metodo  que obtiene el rol de un usuario por medio de su Id
	 * @param unknown $idusers
	 */
	public function getRolesIdRoles($idusers)
	{
	
	
	
	}
	
}
