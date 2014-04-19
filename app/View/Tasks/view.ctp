<div class="tasks view">
<h2><?php echo __('Task'); ?></h2>
	<dl>
		<dt><?php echo __('Idtasks'); ?></dt>
		<dd>
			<?php echo h($task['Task']['idtasks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($task['Task']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($task['Task']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entregable'); ?></dt>
		<dd>
			<?php echo h($task['Task']['entregable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Tasks Idfiles'); ?></dt>
		<dd>
			<?php echo h($task['Task']['file_tasks_idfiles']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Tasks Idstate Tasks'); ?></dt>
		<dd>
			<?php echo h($task['Task']['state_tasks_idstate_tasks']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['idtasks'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['idtasks']), null, __('Are you sure you want to delete # %s?', $task['Task']['idtasks'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
	</ul>
</div>
