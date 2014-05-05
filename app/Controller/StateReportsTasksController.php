<?php
App::uses('AppController', 'Controller');
/**
 * StateReportsTasks Controller
 *
 * @property StateReportsTask $StateReportsTask
 * @property PaginatorComponent $Paginator
 */
class StateReportsTasksController extends AppController {

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
		$this->StateReportsTask->recursive = 0;
		$this->set('stateReportsTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StateReportsTask->exists($id)) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		$options = array('conditions' => array('StateReportsTask.' . $this->StateReportsTask->primaryKey => $id));
		$this->set('stateReportsTask', $this->StateReportsTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StateReportsTask->create();
			if ($this->StateReportsTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state reports task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state reports task could not be saved. Please, try again.'));
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
		if (!$this->StateReportsTask->exists($id)) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateReportsTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state reports task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state reports task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateReportsTask.' . $this->StateReportsTask->primaryKey => $id));
			$this->request->data = $this->StateReportsTask->find('first', $options);
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
		$this->StateReportsTask->id = $id;
		if (!$this->StateReportsTask->exists()) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateReportsTask->delete()) {
			$this->Session->setFlash(__('The state reports task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state reports task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->StateReportsTask->recursive = 0;
		$this->set('stateReportsTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->StateReportsTask->exists($id)) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		$options = array('conditions' => array('StateReportsTask.' . $this->StateReportsTask->primaryKey => $id));
		$this->set('stateReportsTask', $this->StateReportsTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->StateReportsTask->create();
			if ($this->StateReportsTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state reports task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state reports task could not be saved. Please, try again.'));
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
		if (!$this->StateReportsTask->exists($id)) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StateReportsTask->save($this->request->data)) {
				$this->Session->setFlash(__('The state reports task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The state reports task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StateReportsTask.' . $this->StateReportsTask->primaryKey => $id));
			$this->request->data = $this->StateReportsTask->find('first', $options);
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
		$this->StateReportsTask->id = $id;
		if (!$this->StateReportsTask->exists()) {
			throw new NotFoundException(__('Invalid state reports task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StateReportsTask->delete()) {
			$this->Session->setFlash(__('The state reports task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The state reports task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
