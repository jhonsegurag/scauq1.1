<div class="tasks index">
	<h2><?php echo __('Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idtasks'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('entregable'); ?></th>
			<th><?php echo $this->Paginator->sort('file_tasks_idfiles'); ?></th>
			<th><?php echo $this->Paginator->sort('state_tasks_idstate_tasks'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tasks as $task): ?>
	<tr>
		<td><?php echo h($task['Task']['idtasks']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['entregable']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['file_tasks_idfiles']); ?>&nbsp;</td>
		<td><?php echo h($task['Task']['state_tasks_idstate_tasks']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['idtasks'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $task['Task']['idtasks'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['idtasks']), null, __('Are you sure you want to delete # %s?', $task['Task']['idtasks'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?></li>
	</ul>
</div>
