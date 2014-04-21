<?php
App::uses('AppController', 'Controller');
/**
 * FileTasks Controller
 *
 * @property FileTask $FileTask
 * @property PaginatorComponent $Paginator
 */
class FileTasksController extends AppController {

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
		$this->FileTask->recursive = 0;
		$this->set('fileTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FileTask->exists($id)) {
			throw new NotFoundException(__('Invalid file task'));
		}
		$options = array('conditions' => array('FileTask.' . $this->FileTask->primaryKey => $id));
		$this->set('fileTask', $this->FileTask->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileTask->create();
			if ($this->FileTask->save($this->request->data)) {
				$this->Session->setFlash(__('The file task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file task could not be saved. Please, try again.'));
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
		if (!$this->FileTask->exists($id)) {
			throw new NotFoundException(__('Invalid file task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileTask->save($this->request->data)) {
				$this->Session->setFlash(__('The file task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileTask.' . $this->FileTask->primaryKey => $id));
			$this->request->data = $this->FileTask->find('first', $options);
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
		$this->FileTask->id = $id;
		if (!$this->FileTask->exists()) {
			throw new NotFoundException(__('Invalid file task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FileTask->delete()) {
			$this->Session->setFlash(__('The file task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FileTask->recursive = 0;
		$this->set('fileTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FileTask->exists($id)) {
			throw new NotFoundException(__('Invalid file task'));
		}
		$options = array('conditions' => array('FileTask.' . $this->FileTask->primaryKey => $id));
		$this->set('fileTask', $this->FileTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FileTask->create();
			if ($this->FileTask->save($this->request->data)) {
				$this->Session->setFlash(__('The file task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file task could not be saved. Please, try again.'));
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
		if (!$this->FileTask->exists($id)) {
			throw new NotFoundException(__('Invalid file task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileTask->save($this->request->data)) {
				$this->Session->setFlash(__('The file task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileTask.' . $this->FileTask->primaryKey => $id));
			$this->request->data = $this->FileTask->find('first', $options);
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
		$this->FileTask->id = $id;
		if (!$this->FileTask->exists()) {
			throw new NotFoundException(__('Invalid file task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FileTask->delete()) {
			$this->Session->setFlash(__('The file task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
