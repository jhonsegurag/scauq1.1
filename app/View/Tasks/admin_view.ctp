<div class="tasks view">
<h2><?php echo __('Task'); ?></h2>
	<dl>
		<dt><?php echo __('IdTasks'); ?></dt>
		<dd>
			<?php echo h($task['Task']['idTasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($task['Task']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($task['Task']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entregable'); ?></dt>
		<dd>
			<?php echo h($task['Task']['entregable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdEstadoTarea'); ?></dt>
		<dd>
			<?php echo h($task['Task']['idEstadoTarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IdArchivoEntregableTarea'); ?></dt>
		<dd>
			<?php echo h($task['Task']['idArchivoEntregableTarea']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['idTasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['idTasks']), null, __('Are you sure you want to delete # %s?', $task['Task']['idTasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
