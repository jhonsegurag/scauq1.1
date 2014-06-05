
<div class="MisTareasAsignadas index">
	<h2>Mis tareas</h2>
	<table >
		
		<tr><th>Fecha Registro</th><th>Id Actividad</th><th>Id Tarea</th><th>Acciones</th></tr>
		<?php
		
		for ($i=0; $i <sizeof($assigmentTasks) ; $i++) {		
		?>
		<tr>
			<td><?php echo $assigmentTasks[$i]['a']['fechaRegistro']; ?></td>
			<td><?php echo $assigmentTasks[$i]['a']['idActividad']; ?></td>
			<td><?php echo $assigmentTasks[$i]['t']['nombre']; ?></td>
			<td><?php echo $this->Html->link('Ver', array('controller'=>'contributors','action' => 'viewtask', $assigmentTasks[$i]['a']['idTarea'])); ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'contributors','action'=>'index')); ?></li>
		
		
	</ul>
</div>