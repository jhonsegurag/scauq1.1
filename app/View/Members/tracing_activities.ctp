
<div class="MisTareasAsignadas index">
	<h2>Seguimiento de actividades</h2>
	<table >
		
		<tr><th>ID</th><th>Nombre</th><th>Fecha Límite</th><th>Estado</th><th>Acciones</th></tr>
		<?php
		for ($i=0; $i <sizeof($activities) ; $i++) {		
		?>
		<tr>
			<td><?php echo $activities[$i]['Activity']['idActivities']; ?></td>
			<td><?php echo $activities[$i]['Activity']['nombre']; ?></td>
			<td><?php echo $activities[$i]['Activity']['fechaFin']; ?></td>
			<td><?php  echo getStateColor($activities[$i]['Activity']['idEstadoActividad']); ?></td>
			<td><?php echo $this->Html->link('Tareas', array('action' => 'tracingTasks', $activities[$i]['Activity']['idActivities'])); ?></td>
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
	</ul>
</div>

<?php
	function getStateColor($stateActivity)
	{
		if ($stateActivity=='1') {
			return '<div style="background:#FF9;">PENDIENTE</div>';
		}
		else if ($stateActivity=='2') {
			return '<div style="background:#FC9;">PROGRESO</div>';
		}
		else if ($stateActivity=='3') {
			return '<div style="background:#CF9;">TERMINADO</div>';
		}
		else if ($stateActivity=='4') {
			return '<div style="background:#CF9;">MAS INFO</div>';
		}
	}
?>