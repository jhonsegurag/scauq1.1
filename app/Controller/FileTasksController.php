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
		$this->FileTask->create();
         
        if ($this->request->is('post')) {
            $ruta='';    
            if( $this->data['FileTask']['archivo']['error'] == 0 &&  $this->data['FileTask']['archivo']['size'] > 0)
             {
                  $archivo=$this->data['FileTask']['archivo'];
                  $destino = WWW_ROOT.'uploads'.DS;
                  if(move_uploaded_file($archivo['tmp_name'], $destino.$archivo['name']))
                   {               
                      $ruta=$destino.$archivo['name'];
                   }
                  else
                   {
                          $this->Session->setFlash(__('El archivo no se pudo subir, por favor intentelo de nuevo'));       
                   }
				   
				  
                   
            }else{
                  $this->Session->setFlash(__('Error al intentar subir el archivo'));
            }
			
			$this->FileTask->set('nombre',$this->request->data['FileTask']['nombre']);
			$this->FileTask->set('ruta',$ruta);
			
			if ($this->FileTask->save()) {
			$this->Session->setFlash(__('El archivo se a guardado con éxito'));
			return $this->redirect(array('action' => 'index'));
			}
        }
	}


	public function addreview() {
		$this->FileTask->create();
         
        if ($this->request->is('post')) {
            $ruta='';    
            if( $this->data['FileTask']['archivo']['error'] == 0 &&  $this->data['FileTask']['archivo']['size'] > 0)
             {
                  $archivo=$this->data['FileTask']['archivo'];
                  $destino = WWW_ROOT.'uploads'.DS;
                  if(move_uploaded_file($archivo['tmp_name'], $destino.$archivo['name']))
                   {               
                      $ruta=$destino.$archivo['name'];
                   }
                  else
                   {
                          $this->Session->setFlash(__('El archivo no se pudo subir, por favor intentelo de nuevo'));       
                   }
				   
				  
                   
            }else{
                  $this->Session->setFlash(__('Error al intentar subir el archivo'));
            }
			
			$this->FileTask->set('nombre',$this->request->data['FileTask']['nombre']);
			$this->FileTask->set('ruta',$ruta);
			
			if ($this->FileTask->save()) {
			$this->Session->setFlash(__('La Tarea ha sido enviada para calificacion'));
			return $this->redirect(array('controller'=>'contributors','action' => 'mytasks'));
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
