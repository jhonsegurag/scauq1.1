<?php
App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');
App::import('Model', 'Task');
App::import('Model', 'AssigmentTask');
App::import('Model', 'FileTask');
App::import('Model', 'TrackingTask');

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
		
		$trackingTask= new TrackingTask();
		$trackingTask->set('userNameResponsable',$this->Session->read('User.username'));
		$trackingTask->set('fechaActual', date("Y")."-".date("m")."-".date("d"));
		$trackingTask->set('nombreTarea',$dataTask['Task']['nombre']);
		$trackingTask->set('estadoTarea','Abierto');
		
		$trackingTask->save();
		
	}
	
	public function dotask($id=null){
		
			
	}

	public function hacer(){
		//$idUser=$this->Session->read('User.idUser');
		
		$assigmentTask = new AssigmentTask();
		$assigmentTask->set('fechaRegistro',date("Y")."-".date("m")."-".date("d"));
		$assigmentTask->set('idActividad',1);
		$assigmentTask->set('idTarea',1);
		$assigmentTask->set('idAsignadoA',5);
		$assigmentTask->set('idAsignadoPor',1);
		$assigmentTask->save();
	}
	
	
	
	
	
}