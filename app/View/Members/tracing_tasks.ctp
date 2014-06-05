
<div class="MisTareasAsignadas index">
	<h2>Seguimiento de tareas</h2>
	<table >
		
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Fecha Límite</th>
			<th>Estado</th>
			<!--<th>Detalles</th>-->
		</tr>
		<?php
		for ($i=0; $i <sizeof($tasks) ; $i++) {		
		?>
		<tr>
			<td><?php echo $tasks[$i]['Task']['idTasks']; ?></td>
			<td><?php echo $tasks[$i]['Task']['nombre']; ?></td>
			<td><?php echo $tasks[$i]['Task']['descripcion']; ?></td>
			<td><?php  echo getStateColor($tasks[$i]['Task']['idEstadoTarea']); ?></td>
			<td><?php echo $this->Html->link('Ver', array('action' => 'detailsTasks', $tasks[$i]['Task']['idTasks'])); ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('Inicio', array('controller' => 'admins','action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Volver Actividades', array('action' => 'tracingActivities')); ?></li>		
	</ul>
</div>

<?php
	function getStateColor($stateTask)
	{
		if ($stateTask=='1') {
			return '<div style="background:#FF9;">ABIERTO</div>';
		}
		else if ($stateTask=='2') {
			return '<div style="background:#FC9;">CERRADO</div>';
		}
		else if ($stateTask=='3') {
			return '<div style="background:#CF9;">TERMINADA</div>';
		}
		else if ($stateTask=='4') {
			return '<div style="background:#CF9;">MAS INFO</div>';
		}
	}
?>