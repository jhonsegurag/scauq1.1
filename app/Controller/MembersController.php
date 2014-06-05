<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Activity');
App::import('Model', 'Task');
/**
 * OrganizationalUnits Controller
 *
 * @property OrganizationalUnit $OrganizationalUnit
 * @property PaginatorComponent $Paginator
 */
class MembersController extends AppController {

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

	public function tracingActivities() 
	{
		$activity = new Activity();
		$activities=$activity->find('all');		
		$this->set('activities',$activities);
		
	}
	
	public function tracingTasks($id = null) 
	{
		$task = new Task();
		$tasks=$task->find('all',array('conditions'=>array('Task.idTasks'=>$id)));		
		$this->set('tasks',$tasks);
		
	}

}