<?php
App::uses('AppController', 'Controller');
/**
 * FileActivities Controller
 *
 * @property FileActivity $FileActivity
 * @property PaginatorComponent $Paginator
 */
class FileActivitiesController extends AppController {

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
		$this->FileActivity->recursive = 0;
		$this->set('fileActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FileActivity->exists($id)) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		$options = array('conditions' => array('FileActivity.' . $this->FileActivity->primaryKey => $id));
		$this->set('fileActivity', $this->FileActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileActivity->create();
			if ($this->FileActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The file activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file activity could not be saved. Please, try again.'));
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
		if (!$this->FileActivity->exists($id)) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The file activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileActivity.' . $this->FileActivity->primaryKey => $id));
			$this->request->data = $this->FileActivity->find('first', $options);
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
		$this->FileActivity->id = $id;
		if (!$this->FileActivity->exists()) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FileActivity->delete()) {
			$this->Session->setFlash(__('The file activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FileActivity->recursive = 0;
		$this->set('fileActivities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FileActivity->exists($id)) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		$options = array('conditions' => array('FileActivity.' . $this->FileActivity->primaryKey => $id));
		$this->set('fileActivity', $this->FileActivity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FileActivity->create();
			if ($this->FileActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The file activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file activity could not be saved. Please, try again.'));
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
		if (!$this->FileActivity->exists($id)) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FileActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The file activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FileActivity.' . $this->FileActivity->primaryKey => $id));
			$this->request->data = $this->FileActivity->find('first', $options);
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
		$this->FileActivity->id = $id;
		if (!$this->FileActivity->exists()) {
			throw new NotFoundException(__('Invalid file activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FileActivity->delete()) {
			$this->Session->setFlash(__('The file activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The file activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
