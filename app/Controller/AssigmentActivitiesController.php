<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Activity');
App::import('Model', 'User');
App::uses('Lib', 'elibom');
App::uses('Lib', 'elibom/elibom');
App::import('Vendor', 'elibom/elibom');
/**
 * AssigmentActivities Controller
 *
 * @property AssigmentActivity $AssigmentActivity
 * @property PaginatorComponent $Paginator
 */
class AssigmentActivitiesController extends AppController {

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
		$this->AssigmentActivity->recursive = 0;
		$this->set('assigmentActivities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssigmentActivity->exists($id)) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		$options = array('conditions' => array('AssigmentActivity.' . $this->AssigmentActivity->primaryKey => $id));
		$this->set('assigmentActivity', $this->AssigmentActivity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$activity= new Activity ();
		$activities=$activity->find('list',array('fields'=>array('Activity.idActivities','Activity.nombre')));
		$this->set('activities',$activities);
		
		$user= new User ();
		$users=$user->find('list',array('fields'=>array('User.idUser','User.nombre','User.apellido')));
		$this->set('users',$users);
		
		
		if ($this->request->is('post')) {
			$this->AssigmentActivity->create();
			if ($this->AssigmentActivity->save($this->request->data)) {
				$datasol = $this->request->data;
				var_dump($datasol);
				//print ($datasol[4]);
				$this->Session->setFlash(__('The assigment activity has been saved.'));
				$elibom = new ElibomClient('ares2717@hotmail.com', 'j91l1DIHuD');
				$deliveryId = $elibom->sendMessage('573015596207', 'Esto es una prueba en PHP');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment activity could not be saved. Please, try again.'));
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
		if (!$this->AssigmentActivity->exists($id)) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssigmentActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssigmentActivity.' . $this->AssigmentActivity->primaryKey => $id));
			$this->request->data = $this->AssigmentActivity->find('first', $options);
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
		$this->AssigmentActivity->id = $id;
		if (!$this->AssigmentActivity->exists()) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssigmentActivity->delete()) {
			$this->Session->setFlash(__('The assigment activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assigment activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AssigmentActivity->recursive = 0;
		$this->set('assigmentActivities', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AssigmentActivity->exists($id)) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		$options = array('conditions' => array('AssigmentActivity.' . $this->AssigmentActivity->primaryKey => $id));
		$this->set('assigmentActivity', $this->AssigmentActivity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AssigmentActivity->create();
			if ($this->AssigmentActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment activity could not be saved. Please, try again.'));
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
		if (!$this->AssigmentActivity->exists($id)) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssigmentActivity->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment activity has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment activity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssigmentActivity.' . $this->AssigmentActivity->primaryKey => $id));
			$this->request->data = $this->AssigmentActivity->find('first', $options);
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
		$this->AssigmentActivity->id = $id;
		if (!$this->AssigmentActivity->exists()) {
			throw new NotFoundException(__('Invalid assigment activity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssigmentActivity->delete()) {
			$this->Session->setFlash(__('The assigment activity has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assigment activity could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function tracingActivities()
	{
		$activity = new Activity();
		$activities=$activity->find('all');
		$this->set('activities',$activities);
	
	}
	
	/**
	 * index method
	 *
	 * @return void
	 */
	public function tracingTasks($id = null)
	{
		$task = new Task();
		$tasks=$task->find('all',array('conditions'=>array('Task.idTasks'=>$id)));
		$this->set('tasks',$tasks);
	
	}
}
