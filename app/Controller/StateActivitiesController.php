<?php
App::uses('AppController', 'Controller');
/**
 * StateActivities Controller
 *
 * @property StateActivity $StateActivity
 * @property PaginatorComponent $Paginator
 */
class StateActivitiesController extends AppController {

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
		$this->StateActivity->recursive = 0;
		$this->set('stateActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StateActivity->exists($id)) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		$options = array('conditions' => array('StateActivity.' . $this->StateActivity->primaryKey => $id));
		$this->set('stateActivity', $this->StateActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StateActivity->create();
			if ($this->StateActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The state activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state activity could not be saved. Please, try again.'));
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
		if (!$this->StateActivity->exists($id)) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The state activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateActivity.' . $this->StateActivity->primaryKey => $id));
			$this->request->data = $this->StateActivity->find('first', $options);
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
		$this->StateActivity->id = $id;
		if (!$this->StateActivity->exists()) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateActivity->delete()) {
			$this->Session->setFlash(__('The state activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StateActivity->recursive = 0;
		$this->set('stateActivities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StateActivity->exists($id)) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		$options = array('conditions' => array('StateActivity.' . $this->StateActivity->primaryKey => $id));
		$this->set('stateActivity', $this->StateActivity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StateActivity->create();
			if ($this->StateActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The state activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state activity could not be saved. Please, try again.'));
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
		if (!$this->StateActivity->exists($id)) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The state activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateActivity.' . $this->StateActivity->primaryKey => $id));
			$this->request->data = $this->StateActivity->find('first', $options);
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
		$this->StateActivity->id = $id;
		if (!$this->StateActivity->exists()) {
			throw new NotFoundException(__('Invalid state activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateActivity->delete()) {
			$this->Session->setFlash(__('The state activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
