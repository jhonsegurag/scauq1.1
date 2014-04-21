<?php
App::uses('AppController', 'Controller');
/**
 * StateTasks Controller
 *
 * @property StateTask $StateTask
 * @property PaginatorComponent $Paginator
 */
class StateTasksController extends AppController {

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
		$this->StateTask->recursive = 0;
		$this->set('stateTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StateTask->exists($id)) {
			throw new NotFoundException(__('Invalid state task'));
		}
		$options = array('conditions' => array('StateTask.' . $this->StateTask->primaryKey => $id));
		$this->set('stateTask', $this->StateTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StateTask->create();
			if ($this->StateTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state task could not be saved. Please, try again.'));
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
		if (!$this->StateTask->exists($id)) {
			throw new NotFoundException(__('Invalid state task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateTask.' . $this->StateTask->primaryKey => $id));
			$this->request->data = $this->StateTask->find('first', $options);
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
		$this->StateTask->id = $id;
		if (!$this->StateTask->exists()) {
			throw new NotFoundException(__('Invalid state task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateTask->delete()) {
			$this->Session->setFlash(__('The state task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StateTask->recursive = 0;
		$this->set('stateTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StateTask->exists($id)) {
			throw new NotFoundException(__('Invalid state task'));
		}
		$options = array('conditions' => array('StateTask.' . $this->StateTask->primaryKey => $id));
		$this->set('stateTask', $this->StateTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StateTask->create();
			if ($this->StateTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state task could not be saved. Please, try again.'));
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
		if (!$this->StateTask->exists($id)) {
			throw new NotFoundException(__('Invalid state task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateTask.' . $this->StateTask->primaryKey => $id));
			$this->request->data = $this->StateTask->find('first', $options);
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
		$this->StateTask->id = $id;
		if (!$this->StateTask->exists()) {
			throw new NotFoundException(__('Invalid state task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateTask->delete()) {
			$this->Session->setFlash(__('The state task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
