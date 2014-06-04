<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Activity');
App::import('Model', 'Task');
App::import('Model', 'User');
/**
 * AssigmentTasks Controller
 *
 * @property AssigmentTask $AssigmentTask
 * @property PaginatorComponent $Paginator
 */
class AssigmentTasksController extends AppController {

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
		$activity= new Activity ();
		$activities=$activity->find('list',array('fields'=>array('Activity.idActivities','Activity.nombre')));
		$this->set('activities',$activities);
		
		$user= new User ();
		$users=$user->find('list',array('fields'=>array('User.idUser','User.nombre','User.apellido')));
		$this->set('users',$users);
			
		$task= new Task();
		$tasks=$task->find('list',array('fields'=>array('Task.idTasks','Task.nombre')));
		$this->set('tasks',$tasks);
		$this->AssigmentTask->recursive = 0;
		$this->set('assigmentTasks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssigmentTask->exists($id)) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		$options = array('conditions' => array('AssigmentTask.' . $this->AssigmentTask->primaryKey => $id));
		$this->set('assigmentTask', $this->AssigmentTask->find('first', $options));
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
			
		$task= new Task();
		$tasks=$task->find('list',array('fields'=>array('Task.idTasks','Task.nombre')));
		$this->set('tasks',$tasks);
		
		
		if ($this->request->is('post')) {
			$this->AssigmentTask->create();
			if ($this->AssigmentTask->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment task could not be saved. Please, try again.'));
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
		$activity= new Activity ();
		$activities=$activity->find('list',array('fields'=>array('Activity.idActivities','Activity.nombre')));
		$this->set('activities',$activities);
		
		$user= new User ();
		$users=$user->find('list',array('fields'=>array('User.idUser','User.nombre','User.apellido')));
		$this->set('users',$users);
			
		$task= new Task();
		$tasks=$task->find('list',array('fields'=>array('Task.idTasks','Task.nombre')));
		$this->set('tasks',$tasks);
		if (!$this->AssigmentTask->exists($id)) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssigmentTask->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssigmentTask.' . $this->AssigmentTask->primaryKey => $id));
			$this->request->data = $this->AssigmentTask->find('first', $options);
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
		$this->AssigmentTask->id = $id;
		if (!$this->AssigmentTask->exists()) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssigmentTask->delete()) {
			$this->Session->setFlash(__('The assigment task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assigment task could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AssigmentTask->recursive = 0;
		$this->set('assigmentTasks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AssigmentTask->exists($id)) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		$options = array('conditions' => array('AssigmentTask.' . $this->AssigmentTask->primaryKey => $id));
		$this->set('assigmentTask', $this->AssigmentTask->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AssigmentTask->create();
			if ($this->AssigmentTask->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment task could not be saved. Please, try again.'));
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
		if (!$this->AssigmentTask->exists($id)) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AssigmentTask->save($this->request->data)) {
				$this->Session->setFlash(__('The assigment task has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assigment task could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssigmentTask.' . $this->AssigmentTask->primaryKey => $id));
			$this->request->data = $this->AssigmentTask->find('first', $options);
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
		$this->AssigmentTask->id = $id;
		if (!$this->AssigmentTask->exists()) {
			throw new NotFoundException(__('Invalid assigment task'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssigmentTask->delete()) {
			$this->Session->setFlash(__('The assigment task has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assigment task could not be deleted. Please, try again.'));
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
