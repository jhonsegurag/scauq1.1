<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		
		
		<li><?php echo $this->Html->link('Volver', array('controller' => 'contributors','action'=>'mytasks')); ?></li>
		
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'contributors','action'=>'index')); ?></li>
		
		
	</ul>
</div>
<div class="verTarea index">
	<h2>Informacion De Tarea</h2>
	<table>
		
		<tr><th>Nombre</th><th><?php echo $dataTask['Task']['nombre'];?></th></tr>
		<tr><td>ID</td><td><?php echo $dataTask['Task']['idTasks'];?></td></tr>
		<tr><td>Descripcion</td><td><?php echo $dataTask['Task']['descripcion'];?></td></tr>
		<tr><td>Entregable</td><td><?php echo $dataTask['Task']['entregable'];?></td></tr>
		<tr><td>Estado</td><td><?php echo $dataTask['Task']['idEstadoTarea'];?></td></tr>
		<tr><td></td><td></td></tr>
		<tr><td class="actions"><?php echo $this->Html->link(__('Realizar Tarea'), array('controller'=>'contributors','action' => 'dotask', $dataTask['Task']['idTasks'])); ?></td><td></td></tr>
	</table>
	
	
</div>
