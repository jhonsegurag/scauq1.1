<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Role');
App::import('Model', 'User');
App::import('Model', 'OrganizationalUnit');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$organizationalUnit= new OrganizationalUnit ();
		$organizationalUnits=$organizationalUnit->find('list',array('fields'=>array('OrganizationalUnit.idOrganizationalUnit','OrganizationalUnit.nombre')));
		$this->set('organizationalUnits',$organizationalUnits);
		
		$role= new Role ();
		$roles=$role->find('list',array('fields'=>array('Role.idRoles','Role.nombre')));
		$this->set('roles',$roles);
		
		
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				//$this->Session->setFlash(__('The user has been saved.'));
				$this->Session->setFlash('The user has been saved.', 'default', array(), 'good');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	$organizationalUnit= new OrganizationalUnit ();
		$organizationalUnits=$organizationalUnit->find('list',array('fields'=>array('OrganizationalUnit.idOrganizationalUnit','OrganizationalUnit.nombre')));
		$this->set('organizationalUnits',$organizationalUnits);
		
		$role= new Role ();
		$roles=$role->find('list',array('fields'=>array('Role.idroles','Role.nombre')));
		$this->set('roles',$roles);
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
					$this->Session->setFlash('The user has been saved.', 'default', 'good');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
	
	
	
	
		if ($this->request->is('post')) {
	
			$username=$this->request->data['User']['username'];
	
			$user= new User();
			$userData=$user->find('first',array('conditions'=>array('User.username'=>$username)));
				
	
			if ($this->Auth->login())
			{
					
				$userRol=$userData['User']['idRol'];
				$idUser=$userData['User']['idUser'];
				
				$this->Session->write('User.idUser',$idUser);
				$this->Session->write('User.idRol',$userRol);
				switch ($userRol) {
					case 1:
						/*
						 * Si el usuario tiene un rol tipo 1 se le proporcionan permisos de ADMINISTRADOR
						 *
						 **/
						$this->admins();
	
						break;
	
					case 2:
	
						/*
						 * Si el usuario tiene un rol tipo 1 se le proporcionan permisos de INTEGRANTE COMITE
						 *
						 **/
						$this->members();
	
						break;
	
					case 3:
	
						/*
						 * Si el usuario tiene un rol tipo 1 se le proporcionan permisos de AUXILIAR DE COMITE
						 *
						 **/
						$this->contributors();
						break;
						
					case 4:
	
						/*
						 * Si el usuario tiene un rol tipo 1 se le proporcionan permisos de AUXILIAR DE COMITE
						 *
						 **/
						$this->testers();
						break;
							
					default:
	
						break;
				}
	
	
					
			}
			else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
	
		}
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	public function obtenerId(){
	
		return $this->User->primaryKey;
	}
	
	/**
	 *
	 *
	 * @return void
	 */
	public function admins() {
	
		$this->redirect('/admins/');
	}
	
	/**
	 *
	 *
	 * @return void
	 */
	public function members() {
	
		$this->redirect('/members/');
	}
	
	
	/**
	 *
	 *
	 * @return void
	 */
	public function contributors() {
	
		$this->redirect('/contributors/');
	}
	
	/**
	 *
	 *
	 * @return void
	 */
	public function testers() {
	
		$this->redirect('/testers/');
	}
	

}
