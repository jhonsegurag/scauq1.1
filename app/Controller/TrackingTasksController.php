<?php
App::uses('AppController', 'Controller');
/**
 * TrackingTasks Controller
 *
 * @property TrackingTask $TrackingTask
 * @property PaginatorComponent $Paginator
 */
class TrackingTasksController extends AppController {

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
		$this->TrackingTask->recursive = 0;
		$this->set('trackingTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrackingTask->exists($id)) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		$options = array('conditions' => array('TrackingTask.' . $this->TrackingTask->primaryKey => $id));
		$this->set('trackingTask', $this->TrackingTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrackingTask->create();
			if ($this->TrackingTask->save($this->request->data)) {
				$this->Session->setFlash(__('The tracking task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracking task could not be saved. Please, try again.'));
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
		if (!$this->TrackingTask->exists($id)) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrackingTask->save($this->request->data)) {
				$this->Session->setFlash(__('The tracking task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracking task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrackingTask.' . $this->TrackingTask->primaryKey => $id));
			$this->request->data = $this->TrackingTask->find('first', $options);
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
		$this->TrackingTask->id = $id;
		if (!$this->TrackingTask->exists()) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrackingTask->delete()) {
			$this->Session->setFlash(__('The tracking task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tracking task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TrackingTask->recursive = 0;
		$this->set('trackingTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TrackingTask->exists($id)) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		$options = array('conditions' => array('TrackingTask.' . $this->TrackingTask->primaryKey => $id));
		$this->set('trackingTask', $this->TrackingTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TrackingTask->create();
			if ($this->TrackingTask->save($this->request->data)) {
				$this->Session->setFlash(__('The tracking task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracking task could not be saved. Please, try again.'));
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
		if (!$this->TrackingTask->exists($id)) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrackingTask->save($this->request->data)) {
				$this->Session->setFlash(__('The tracking task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tracking task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrackingTask.' . $this->TrackingTask->primaryKey => $id));
			$this->request->data = $this->TrackingTask->find('first', $options);
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
		$this->TrackingTask->id = $id;
		if (!$this->TrackingTask->exists()) {
			throw new NotFoundException(__('Invalid tracking task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TrackingTask->delete()) {
			$this->Session->setFlash(__('The tracking task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tracking task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
