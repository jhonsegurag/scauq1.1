<?php
App::uses('AppController', 'Controller');
/**
 * OrganizationalUnits Controller
 *
 * @property OrganizationalUnit $OrganizationalUnit
 * @property PaginatorComponent $Paginator
 */
class OrganizationalUnitsController extends AppController {

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
		$this->OrganizationalUnit->recursive = 0;
		$this->set('organizationalUnits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrganizationalUnit->exists($id)) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		$options = array('conditions' => array('OrganizationalUnit.' . $this->OrganizationalUnit->primaryKey => $id));
		$this->set('organizationalUnit', $this->OrganizationalUnit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrganizationalUnit->create();
			if ($this->OrganizationalUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The organizational unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizational unit could not be saved. Please, try again.'));
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
		if (!$this->OrganizationalUnit->exists($id)) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrganizationalUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The organizational unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizational unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganizationalUnit.' . $this->OrganizationalUnit->primaryKey => $id));
			$this->request->data = $this->OrganizationalUnit->find('first', $options);
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
		$this->OrganizationalUnit->id = $id;
		if (!$this->OrganizationalUnit->exists()) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganizationalUnit->delete()) {
			$this->Session->setFlash(__('The organizational unit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organizational unit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->OrganizationalUnit->recursive = 0;
		$this->set('organizationalUnits', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->OrganizationalUnit->exists($id)) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		$options = array('conditions' => array('OrganizationalUnit.' . $this->OrganizationalUnit->primaryKey => $id));
		$this->set('organizationalUnit', $this->OrganizationalUnit->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->OrganizationalUnit->create();
			if ($this->OrganizationalUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The organizational unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizational unit could not be saved. Please, try again.'));
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
		if (!$this->OrganizationalUnit->exists($id)) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrganizationalUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The organizational unit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organizational unit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganizationalUnit.' . $this->OrganizationalUnit->primaryKey => $id));
			$this->request->data = $this->OrganizationalUnit->find('first', $options);
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
		$this->OrganizationalUnit->id = $id;
		if (!$this->OrganizationalUnit->exists()) {
			throw new NotFoundException(__('Invalid organizational unit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganizationalUnit->delete()) {
			$this->Session->setFlash(__('The organizational unit has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organizational unit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
