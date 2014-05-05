<div class="tasks index">
	<h2><?php echo __('Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'idTasks'; ?></th>
			<th><?php echo 'nombre'; ?></th>
			<th><?php echo 'descripcion'; ?></th>
			<th><?php echo 'entregable'; ?></th>
			<th><?php echo 'idEstadoTarea'; ?></th>
			<th><?php echo 'idArchivoEntregableTarea'; ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td><?php echo h($task['Task']['idTasks']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['entregable']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['idEstadoTarea']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['idArchivoEntregableTarea']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['idTasks'])); ?>			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'add')); ?></li>
	</ul>
</div>