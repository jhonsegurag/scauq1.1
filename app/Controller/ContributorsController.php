<?php
App::uses('AppController', 'Controller');
App::import('Model', 'Task');
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
	public function tasks() {
		$task = new Task();
		$tasks=$task->find('all');
		
		$this->set('tasks',$tasks);
	}


}