<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Task');
App::import('Model', 'AssigmentTask');
App::import('Model', 'FileTask');
/**
 * OrganizationalUnits Controller
 *
 * @property OrganizationalUnit $OrganizationalUnit
 * @property PaginatorComponent $Paginator
 */
class ContributorsController extends AppController {

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
		
	}
	

/**
 * index method
 *
 * @return void
 */
	public function mytasks() {
		$idUser=$this->Session->read('User.idUser');
		$assigmentTask = new AssigmentTask();
		$assigmentTasks=$assigmentTask->find('all',array('conditions'=>array('AssigmentTask.idAsignadoA'=>$idUser)));
		$this->set('assigmentTasks',$assigmentTasks);
	}
	
	
	/**
 * view method
 *
 * @return void
 */
	public function viewtask($id=null) {
		
		$task= new Task();
		$dataTask=$task->find('first',array('conditions'=> array('Task.idTasks'=>$id)));
		
		
		
		$this->set('dataTask',$dataTask);
		
		
	}
	
	public function dotask($id=null){
			
		
	}

	
	
	
	
}