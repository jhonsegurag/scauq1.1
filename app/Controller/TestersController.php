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
class TestersController extends AppController {

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
		$idUser=$this->Session->read('User.idUser');
		$assigmentTask = new AssigmentTask();
		$assigmentTasks=$assigmentTask->find('all',array('conditions'=>array('AssigmentTask.idAsignadoA'=>$idUser)));
		$this->set('assigmentTasks',$assigmentTasks);
	}


	public function taskstester(){
		$idUser=$this->Session->read('User.idUser');
		$assigmentTask = new AssigmentTask();
		$assigmentTasks=$assigmentTask->find('all',array('conditions'=>array('AssigmentTask.idAsignadoA'=>$idUser)));
		$this->set('assigmentTasks',$assigmentTasks);
	}
	
	
}