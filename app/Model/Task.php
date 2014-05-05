<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 */
class Task extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTasks';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'idTasks';

	public function getAssigmentTask($idusuario)
	{
		$tasks=$task->query("SELECT t.idTask,t.nombre,t.descripcion,t.entregable,t.idEstadoTarea,t.idArchivoEntregableTarea
							 FROM tasks AS t, assigment_tasks AS a 
							 WHERE t.idTask = a.idTarea AND a.idAsignadoA= ");
	}
}
